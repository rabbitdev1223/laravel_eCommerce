<?php

namespace App\Http\Livewire\Frontend\Products;

use App\Models\Item;
use App\Models\ItemUom;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\ItemOption;

class ItemSelect extends Component
{

    public $product;

    public $items;

    public $uoms;

    public $item_number;

    public $uom;

    public $item;

    public $options_ids;

    public $quantity;

    public $itemOptions;

    public $productId;

    public $itemIds;

    protected $queryString = ['item_number'];
    
    public $optionByItem;
    
    public $price;
    
    public function mount(Product $product)
    {
        $this->product = $product;
        $this->productId = $product->id;
        $this->quantity = 1;
        $this->items = Item::where('product_id', $product->id)->get();
        $this->uoms = ItemUom::find($this->items->pluck('item_uom_id')->unique());

        if (request()->has('item_number') && $this->items->where('internal_number', request()->item_number)->count() !== 0) {
            $this->item_number = request()->item_number;
            $this->item = $this->items->where('internal_number', $this->item_number)->first();
            $this->uom = $this->item->item_uom_id;
        }


        $this->itemIds = Item::where('product_id', $this->productId)->pluck('id');

        $this->itemOptions = ItemOption::whereIn('item_id', $this->itemIds)->get();

        $this->options_ids = [];
        $this->optionByItem = [];
//         $i = 1;
        
//         foreach ($this->items as $item){
//             foreach ($item->itemOptions->sortBy('item_option_type_id')->groupBy('item_option_type_id') as $index => $itemOption) {
//                 $this->options_ids[$i] = $itemOption->first()->item_option_value_id;
//                 $i++;
//             }
//         }
        
        if(count($this->items) == 1){
            $item = $this->items->first();
            $this->item = $item;
            $this->item_number = $item->internal_number;
            $this->uom = $item->item_uom_id;
            $this->price = $item->formattedPrice();
        }else{
            
            
            $this->item = null;
            $this->item_number = null;
            $this->uom = null;
            
            $this->resertPrice();
        }
        
    }

    public function render()
    {
        $this->itemOptions = ItemOption::whereIn('item_id', $this->itemIds)->get();

        return view('livewire.frontend.products.item-select');
    }

    public function updatedUom($value)
    {
        $this->resertPrice();
        $this->quantity = 1;
        $this->item_number = null;
        $this->item = null;
        $this->options_ids = [];
        
        $product_id = $this->productId;
        $items = $this->product->items;
        $uom = $value;
        
        if(!$uom)
            return;
            
        if(!$items)
            return;
                
                
        $this->optionByItem = ItemOption::whereExists(function ($query) use ($product_id, $uom) {
            $query->select(DB::raw(1))
            ->from('items')
            ->join(DB::raw('item_options as dbTemp'),'items.id','=','dbTemp.item_id')
            ->where('items.product_id', $product_id)
            ->where('items.item_uom_id', $uom)
            ->whereRaw('items.id = item_options.item_id');
            
        })->with('itemOptionType')->with('itemOptionValue')->with('item')->get()->toArray();
        
        if(count($this->options_ids) > 0){        
            foreach ($items as $item){
                if($item->item_uom_id == $uom){
                    $this->item = $item;
                    $this->item_number = $item->internal_number;
                    $this->uom = $item->item_uom_id;
                    $this->price = $item->formattedPrice();
                    
                    break;
                }
            }
        }
        
        
    }

    public function updatedOptionsIds($value, $option_type)
    {
        if($value == null){
            return;
        }
        
        $this->optionByItem = [];
        
        $this->item_number = null;
        $this->item = null;
        
        $product_id = $this->productId;
        $items = $this->product->items;
        $uom = $this->uom;
        
        if(!$uom)
            return;
        
        if(!$items)
            return;
           
        
        $this->optionByItem = ItemOption::whereExists(function ($query) use ($product_id, $value, $option_type, $uom) {
            $query->select(DB::raw(1))
            ->from('items')
            ->join(DB::raw('item_options as dbTemp'),'items.id','=','dbTemp.item_id')
            ->where('items.product_id', $product_id)
            ->where('dbTemp.item_option_value_id', $value)
            ->where('dbTemp.item_option_type_id', $option_type)
            ->where('items.item_uom_id', $uom)
            ->whereRaw('items.id = item_options.item_id');
            
        })->with('itemOptionType')->with('itemOptionValue')->with('item')->get()->toArray();
       
        if(count($this->optionByItem) > 0 && count($this->options_ids) > 0){
            foreach ($items as $item){
                foreach ($item->itemOptions as $io) {
                    if($io->item_option_value_id == $value && $io->item_option_type_id == $option_type && $uom == $item->item_uom_id){
                        $this->item = $item;
                        $this->item_number = $item->internal_number;
                        $this->uom = $item->item_uom_id;
                        $this->price = $item->formattedPrice();
                        
                        break;
                    }
                    
                }
            }
        }
        
        
        $this->quantity = 1;
    }

    public function updatedQuantity($value)
    {
        if ($value < 1) {
            $this->quantity = 1;
        }
    }

    public function addToCart()
    {
        if(!$this->item)
            return;
        
        $this->emit('addItem', $this->item->id, $this->quantity);
        $this->dispatchBrowserEvent('toastr', $this->product->title . ' Added To Cart');
    }
    
    public function resertPrice(){
        $price_range = DB::table('items')->select(DB::raw('MIN(items.sale_price) as min_price'), DB::raw('MAX(items.sale_price) as max_price'))->where('items.product_id', $this->productId)->groupBy('product_id')->limit(1)->get()->first();
        if($price_range->min_price != $price_range->max_price){
            $this->price =   '$' . number_format($price_range->min_price / 100, 2) . ' - $'. number_format($price_range->max_price / 100, 2);
        }else{
            $this->price =   '$' . number_format($price_range->min_price / 100, 2);
        }
    }
    
   
}
