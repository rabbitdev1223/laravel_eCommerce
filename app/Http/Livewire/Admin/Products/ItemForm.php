<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\Item;
use App\Models\Product;
use App\Models\ItemUom;
use App\Models\StockStatus;
use App\Models\ItemOption;
use App\Models\ItemOptionType;
use App\Models\ItemOptionValue;

class ItemForm extends Component
{
    public $item;
    public $item_id;
    public $product_id;
    public $image_id;
    public $item_uom_id;
    public $stock_status_id;
    public $sale_price;
    public $cost_price;
    public $quantity;
    public $weight;
    public $length;
    public $width;
    public $height;
    public $mpn;
    public $internal_number;
    public $model_number;
    public $part_number;
    public $manufacturerCode;

    public $product_images;

    public $itemUoms;
    public $stockStatuses;

    public $itemOptions;
    public $itemOptionTypes;
    public $itemOptionValues;

    public $deletedItemOptionIds;

    public $addOptionType;

    protected $listeners = ['toggleItem'];

    protected $rules = [
        'item_uom_id' => ['required'],
        'stock_status_id' => ['required'],
        'sale_price' => ['required'],
        'cost_price' => ['required'],
        'quantity' => ['required'],
        'mpn' => ['required'],
        'internal_number' => ['required'],
        'itemOptions.*.item_option_value_id' => ['required'],
    ];

    protected $messages = [
        'itemOptions.*.item_option_value_id.required' => 'The option value is required.',
    ];

    public function mount()
    {
        $this->resetFields();

        $this->itemUoms = ItemUom::all();
        $this->stockStatuses = StockStatus::all();

        $this->itemOptionTypes = ItemOptionType::all();

        $this->itemOptionValues = [
            '1' => ['1' => 'clear', '3' => 'gray', '9' => 'beige', '11' => 'black', '12' => 'orange', '13' => 'white', '16' => 'purple', '17' => 'green'],
            '2' => ['2' => 'xs', '4' => 's', '5' => 'm', '6' => 'l', '7' => 'xl', '8' => '2xl', '10' => '3xl', '14' => '4xl', '15' => '5xl']
        ];
    }

    public function render()
    {
        return view('livewire.admin.products.item-form');
    }

    public function submit()
    {
    }

    public function updated($propertyName)
    {
        if ($propertyName == 'mpn' || $propertyName == 'item_uom_id' || str_contains($propertyName, 'item_option_value_id')) {
            $this->generateInternalNumber();
        }
    }

    public function changePrice($mode)
    {
        if ($mode == 'decrease-quantity') {
            $this->quantity = intval($this->quantity) - 1;
        }
        if ($mode == 'increase-quantity') {
            $this->quantity = intval($this->quantity) + 1;
        }
        if ($mode == 'decrease-weight') {
            $this->weight = number_format(floatval($this->weight) - 1, 2);
        }
        if ($mode == 'increase-weight') {
            $this->weight = number_format(floatval($this->weight) + 1, 2);
        }
        if ($mode == 'decrease-length') {
            $this->length = number_format(floatval($this->length) - 1, 2);
        }
        if ($mode == 'increase-length') {
            $this->length = number_format(floatval($this->length) + 1, 2);
        }
        if ($mode == 'decrease-width') {
            $this->width = number_format(floatval($this->width) - 1, 2);
        }
        if ($mode == 'increase-width') {
            $this->width = number_format(floatval($this->width) + 1, 2);
        }
        if ($mode == 'decrease-height') {
            $this->height = number_format(floatval($this->height) - 1, 2);
        }
        if ($mode == 'increase-height') {
            $this->height = number_format(floatval($this->height) + 1, 2);
        }
    }

    public function resetFields()
    {
        $this->item = null;
        $this->product_id = null;
        $this->item_id = null;
        $this->image_id = null;
        $this->stock_status_id = null;
        $this->item_uom_id = null;
        $this->sale_price = "";
        $this->cost_price = "";
        $this->quantity = 0;
        $this->weight = "";
        $this->length = "";
        $this->width = "";
        $this->height = "";
        $this->mpn = "";
        $this->internal_number = "";
        $this->model_number = "";
        $this->part_number = "";
        $this->manufacturerCode = "";

        $this->product_images = [];
        $this->itemOptions = [];
        $this->deletedItemOptionIds = [];
    }

    public function toggleItem($params)
    {
        $this->resetFields();

        $this->load($params['itemId'], $params['productId']);
    }

    public function generateInternalNumber()
    {
        $uomTitle = "";
        $itemUOM = ItemUom::find($this->item_uom_id);
        if ($itemUOM) {
            $uomTitle = $itemUOM->title;
        }

        $itemOptionValuesStr = "";
        if (count($this->itemOptions) > 0) {
            $valueArr = [];
            foreach ($this->itemOptions as $option) {
                if ($option['item_option_value_id']) {
                    array_push($valueArr, $this->itemOptionValues[$option['item_option_type_id']][$option['item_option_value_id']]);
                }
            }
            asort($valueArr, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
            $itemOptionValuesStr = join($valueArr);
        }

        $this->internal_number = strtoupper($this->manufacturerCode . $this->mpn . $itemOptionValuesStr . $uomTitle);
        $this->emit('internalNumberUpdated', $this->internal_number);
    }

    public function load($itemId, $productId)
    {
        $this->product_id = $productId;
        $product = Product::find($productId);
        $this->manufacturerCode = $product->manufacturer->code;
        $this->product_images = $product->images;

        if (intval($itemId) == 0) {
            $this->image_id = $product->image_id ?? null;
            $this->generateInternalNumber();
            $this->emit('itemValuesLoaded', ['item_uom_id' => null, 'stock_status_id' => null, 'sale_price' => null, 'cost_price' => null]);
        } else if (intval($itemId) > 0) {
            $this->item = Item::find($itemId);
            $this->item_id = $itemId;
            $this->image_id = $this->item->image_id;
            $this->item_uom_id = $this->item->item_uom_id;
            $this->sale_price = $this->item->sale_price / 100;
            $this->cost_price = $this->item->cost_price / 100;
            $this->stock_status_id = $this->item->stock_status_id;
            $this->quantity = $this->item->quantity;
            $this->weight = $this->item->weight;
            $this->length = $this->item->length;
            $this->width = $this->item->width;
            $this->height = $this->item->height;
            $this->mpn = $this->item->mpn;
            $this->internal_number = $this->item->internal_number;
            $this->model_number = $this->item->model_number;
            $this->part_number = $this->item->part_number;
            $this->itemOptions = $this->item->itemOptions->toArray();

            $this->emit('itemValuesLoaded', ['item_uom_id' => $this->item_uom_id, 'stock_status_id' => $this->stock_status_id, 'item_options' => $this->itemOptions, 'sale_price' => $this->sale_price, 'cost_price' => $this->cost_price]);
        } else {
            return;
        }
    }

    public function productImageRadioClickHandler($productImageId)
    {
        $this->image_id = $productImageId;
    }

    public function addNewOption()
    {
        $this->validate(['addOptionType' => ['required']]);

        array_push($this->itemOptions, [
            'id' => null,
            'item_option_type_id' => intval($this->addOptionType),
            'item_option_value_id' => null,
            'item_id' => null
        ]);

        $this->emit('newItemOptionAdded');
    }

    public function deleteOptionItem($optionItemKey)
    {
        array_push($this->deletedItemOptionIds, $this->itemOptions[$optionItemKey]['id']);
        unset($this->itemOptions[$optionItemKey]);
        $this->generateInternalNumber();
    }

    public function save()
    {
        $this->validate();
        $updatedItem = Item::updateOrCreate(
            ['id' => $this->item_id],
            [
                'product_id' => $this->product_id,
                'item_uom_id' => $this->item_uom_id,
                'stock_status_id' => $this->stock_status_id,
                'sale_price' => $this->sale_price * 100,
                'cost_price' => $this->cost_price * 100,
                'quantity' => intval($this->quantity),
                'image_id' => $this->image_id,
                'weight' => floatval($this->weight),
                'length' => floatval($this->length),
                'width' => floatval($this->width),
                'height' => floatval($this->height),
                'mpn' => $this->mpn,
                'internal_number' => $this->internal_number,
                'model_number' => $this->model_number,
                'part_number' => $this->part_number,
            ]
        );

        foreach ($this->deletedItemOptionIds as $deletedItemOptionId) {
            $itemToDelete = ItemOption::find($deletedItemOptionId);
            if ($itemToDelete) {
                $itemToDelete->delete();
            }
        }

        foreach ($this->itemOptions as $itemOption) {
            ItemOption::updateOrCreate(
                ['id' => $itemOption['id']],
                [
                    'item_id' => $updatedItem->id,
                    'item_option_type_id' => intval($itemOption['item_option_type_id']),
                    'item_option_value_id' => intval($itemOption['item_option_value_id']),
                ]
            );
        }

        $this->emit('itemUpdated');
    }

    public function closeModal()
    {
        $this->resetErrorBag();
    }
}
