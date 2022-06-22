<?php

namespace App\Http\Livewire\Frontend\Home;

use App\Models\Tag;
use App\Models\Item;
use App\Models\Product;
use App\Models\ProductType;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ListProducts extends Component
{
    public $products;
    protected $listeners = ['searchValue'];

    private $tempCategories;
    private $resultCategoryIds;

    public function getSubCategories($categoryId)
    {
        foreach ($this->tempCategories as $typeId => $parentId) {
            if ($parentId === null) {
                unset($this->tempCategories[$typeId]);
            } elseif ($categoryId == $parentId) {
                $this->resultCategoryIds->push($typeId);
                unset($this->tempCategories[$typeId]);
                $this->getSubCategories($typeId);
            }
        }
    }


    public function mount()
    {
        if (request()->has('search')) {
            $test = collect();

            $productIds = Item::where('internal_number', 'LIKE', '%' . request()->search . '%')->pluck('product_id');

            $moreids = Product::where('title', 'LIKE', '%' . request()->search . '%')->pluck('id');

            $tagProductIds = DB::table('taggables')
                ->where('taggable_type', 'App\Models\Product')
                ->whereIn('tag_id', Tag::where('title', 'LIKE', '%' . request()->search . '%')->pluck('id'))
                ->pluck('taggable_id');

            $test->push($tagProductIds);
            $test->push($productIds);
            $test->push($moreids);

            $this->products = Product::find($test->flatten()->unique());
        } elseif (request()->has('category')) {
            $this->tempCategories = ProductType::get()->pluck('product_type_id', 'id');

            $this->resultCategoryIds = collect();

            $currentCategoryId = ProductType::where('title', '=', request()->category)->pluck('id')->first();
            $this->resultCategoryIds->push($currentCategoryId);

            $this->getSubCategories($currentCategoryId);
            $this->products = Product::whereIn('product_type_id', $this->resultCategoryIds)->get();

            //             dd($this->products[0]->allCategories(), $this->products[1]->allCategories());
        } else {

            $this->products = Cache::remember('products', 60 * 60 * 24, function () {
                return Product::with('items', 'image', 'productType')->get();
            });
            // $this->products = Cache::remember('products', 60 * 60 * 24, function () {
            //     return Product::with('items', 'image', 'productType')->get()->get()->filter(function ($product) {
            //         return count($product->items) > 0;
            //     });
            // });
        }
    }

    public function render()
    {
        return view('livewire.frontend.home.list-products');
    }

    public function searchValue($value)
    {
        $test = collect();

        $productIds = Item::where('internal_number', 'LIKE', '%' . $value . '%')->pluck('product_id');

        $moreids = Product::where('title', 'LIKE', '%' . $value . '%')->pluck('id');

        $tagProductIds = DB::table('taggables')
            ->where('taggable_type', 'App\Models\Product')
            ->whereIn('tag_id', Tag::where('title', 'LIKE', '%' . $value . '%')->pluck('id'))
            ->pluck('taggable_id');

        $test->push($tagProductIds);
        $test->push($productIds);
        $test->push($moreids);

        $this->products = Product::find($test->flatten()->unique());
    }
}
