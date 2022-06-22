<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __invoke()
    {
        $productTypes = Cache::remember('productTypes', 60 * 60 * 24, function () {
            return ProductType::whereNull('product_type_id')->get();
        });

        // dd($productTypes->)

        // dd(ProductType::whereIn('id', $products->pluck('product_type_id')->unique())->with('productType')->get()->groupBy('product_type_id'));

        // dd($products->groupBy('product_type_id'));

        return view('frontend.home', compact('productTypes'));
    }
}
