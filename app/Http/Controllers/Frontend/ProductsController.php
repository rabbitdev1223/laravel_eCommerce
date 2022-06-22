<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ItemOption;

class ProductsController extends Controller
{
    public function __invoke($product)
    {
        if (Product::where('slug', $product)->get()->count() == 0) {
            return redirect()->route('home');
        }

        $product = Product::where('slug', $product)->firstOrFail();

        $tagIds = Tag::join('taggables', 'taggables.tag_id', '=', 'tags.id')
            ->where('taggables.taggable_type', 'App\\Models\\Product')
            ->where('taggables.taggable_id', $product->id)->pluck('tags.id');

        $productsTags = Product::whereExists(function ($query) use ($tagIds) {
            $query->select(DB::raw(1))
                ->from('taggables')
                ->where('taggables.taggable_type', 'App\\Models\\Product')
                ->whereRaw('taggables.taggable_id = products.id')
                ->whereIn('taggables.tag_id', $tagIds);
        })->where('products.id', '!=', $product->id)->orderByRaw('RAND()')->limit(4)->get();

        $primaryImage = $product->image;
        $secondaryImages = $product->images->filter(function($image) use ($primaryImage) {
            return $image != $primaryImage;
        });

        return view('frontend.products.show', compact('product', 'productsTags', 'primaryImage', 'secondaryImages'));
    }
}
