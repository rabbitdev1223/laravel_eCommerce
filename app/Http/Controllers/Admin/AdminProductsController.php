<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;

class AdminProductsController extends Controller
{
    public function __invoke(Request $request)
    {
        $productName = "";
        $internalNumber = "";
        $manufacturerId = "";
        $minPrice = "";
        $maxPrice = "";
        $titleDesc = "";
        $productType = "";

        $current_page = 1;
        if ($request->input('page') && intval($request->page) > 0) {
            $current_page = intval($request->page);
        }

        if ($request->input('productName') && strlen(trim($request->productName)) > 0) {
            $productName = trim($request->productName);
        }
        if ($request->input('internalNumber') && strlen(trim($request->internalNumber)) > 0) {
            $internalNumber = trim($request->internalNumber);
        }
        if ($request->input('manufacturerId')) {
            $manufacturerId = $request->manufacturerId;
        }
        if ($request->input('minPrice')) {
            $minPrice = $request->minPrice;
        }
        if ($request->input('maxPrice')) {
            $maxPrice = $request->maxPrice;
        }
        if ($request->input('productType')) {
            $productType = $request->productType;
        }

        $url = $request->url();
        $products = new Product();

        if (strlen($productName) > 0) {
            $products = $products->where(function ($join) use ($productName) {

                $parts = explode(" ", $productName);

                if (count($parts) > 1) {
                    foreach ($parts as $value) {
                        if (trim($value) == "")
                            continue;

                        $join->orWhere('title', 'LIKE', "%{$value}%");
                        $join->orWhere('description', 'LIKE', "%{$value}%");
                        $join->orWhere('slug', 'LIKE', "%{$value}%");
                    }
                } else {
                    $join->orWhere('title', 'LIKE', "%{$productName}%");
                    $join->orWhere('description', 'LIKE', "%{$productName}%");
                    $join->orWhere('slug', 'LIKE', "%{$productName}%");
                }
            });

            $titleDesc = $titleDesc . " product name is like '{$productName}',";
        }

        if (strlen($internalNumber) > 0) {
            $products = $products->select("products.*")->leftjoin('items', 'items.product_id', '=', 'products.id')->Where('internal_number', 'LIKE', "%{$internalNumber}%")->groupBy('products.id');

            $titleDesc = $titleDesc . " internal number is like '{$internalNumber}',";
        }

        if (intval($manufacturerId) > 0) {
            $products = $products->where(function ($join) use ($manufacturerId) {
                $join->orWhere('manufacturer_id', '=', $manufacturerId);
            });

            $manufacturerTitle = Manufacturer::find($manufacturerId)->title;
            $titleDesc = $titleDesc . " manufacturer is '{$manufacturerTitle}',";
        }

        if( intval($minPrice) > 0 && intval($maxPrice) > 0)
        {
            $products = $products->select("products.*")->leftjoin('items', 'items.product_id', '=', 'products.id')->whereBetween('sale_price', [$minPrice * 100, $maxPrice * 100])->groupBy('products.id');
            $titleDesc = $titleDesc . " any item price is between '$" . number_format($minPrice, 2) . "' and '$" . number_format($maxPrice, 2) . "'";
        }
        else if (intval($minPrice) > 0) {
            $products = $products->select("products.*")->leftjoin('items', 'items.product_id', '=', 'products.id')->where("sale_price", '>', $minPrice * 100)->groupBy('products.id');
            $titleDesc = $titleDesc . " any item price is greater than '$" . number_format($minPrice, 2) . "'";
        }
        else if (intval($maxPrice) > 0) {
            $products = $products->select("products.*")->leftjoin('items', 'items.product_id', '=', 'products.id')->where("sale_price", '<', $maxPrice * 100)->groupBy('products.id');
            $titleDesc = $titleDesc . " any item price is less than '$" . number_format($maxPrice, 2) . "'";
        }

        if (intval($manufacturerId) > 0) {
            $products = $products->where(function ($join) use ($manufacturerId) {
                $join->orWhere('manufacturer_id', '=', $manufacturerId);
            });

            $manufacturerTitle = Manufacturer::find($manufacturerId)->title;
            $titleDesc = $titleDesc . " manufacturer is '{$manufacturerTitle}',";
        }

        if (trim($productType) != "") {
            $productsIdsIncludingProductType = $products->get()->filter(function ($product) use ($productType) {
                return $product->allCategories()->contains($productType);
            })->pluck('id');

            $products = $products->where(function ($join) use ($productsIdsIncludingProductType) {
                $join->orWhereIn('id', $productsIdsIncludingProductType);
            });

            $titleDesc = $titleDesc . " category is '{$productType}',";
        }

        if ($titleDesc) {
            $titleDesc = 'You are viewing products of which' . substr($titleDesc, 0, strlen($titleDesc) - 1);
        } else {
            $titleDesc = 'You are viewing all products';
        }

        $products = $products->orderBy('title', 'ASC')->paginate(8, ['*'], 'page', $current_page)->onEachSide(2);
        $elements_links = $products->links()['elements'];

        return view('admin.products.index', compact('products', 'url', 'productName', 'internalNumber', 'manufacturerId', 'productType', 'minPrice', 'maxPrice', 'titleDesc', 'elements_links'));
    }
}
