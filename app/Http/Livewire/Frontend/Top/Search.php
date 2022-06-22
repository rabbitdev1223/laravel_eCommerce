<?php

namespace App\Http\Livewire\Frontend\Top;

use App\Models\Tag;
use App\Models\Item;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Search extends Component
{
    public $search;

    public $products;

    public function mount()
    {
        $this->products = collect();
    }

    public function render()
    {
        return view('livewire.frontend.top.search');
    }

    public function updatedSearch($value)
    {
        $test = collect();

        $productIds = Item::where('internal_number', 'LIKE', '%' . $value . '%')->pluck('product_id')->unique();

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
