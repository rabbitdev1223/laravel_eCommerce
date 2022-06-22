<?php

namespace App\Http\Livewire\Admin\Products;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Product;

class ProductsTable extends Component
{
    public $productsIds;
    public $orderField;
    public $orderValue;

    public function mount($products)
    {
        $this->orderField = "";
        $this->orderValue = "";
        $this->productsIds = $products->pluck('id');
    }

    public function toggleActive($productId)
    {
        $product = Product::find($productId);
        $product->is_active = !$product->is_active;

        $product->save();
    }

    public function render()
    {
        if ($this->orderField == "manufacturer") {
            $sortedProducts = Product::select("products.*")->whereIn('products.id', $this->productsIds)->leftjoin('manufacturers', 'products.manufacturer_id', '=', 'manufacturers.id')->orderBy('manufacturers.title', $this->orderValue)->get();
            return view('livewire.admin.products.products-table', ['products' => $sortedProducts]);
        } else if ($this->orderField == "cost_price") {
            $sortedProducts = Product::select("products.*")->whereIn('products.id', $this->productsIds)->leftjoin('items', 'items.product_id', '=', 'products.id')->groupBy('products.id')->orderBy(DB::raw('MIN(items.cost_price)'), $this->orderValue)->get();
            return view('livewire.admin.products.products-table', ['products' => $sortedProducts]);
        } else if ($this->orderField == "stock") {
            $sortedProducts = Product::select("products.*", DB::raw('SUM(items.quantity) as productQuantity'))->whereIn('products.id', $this->productsIds)->leftjoin('items', 'items.product_id', '=', 'products.id')->groupBy('products.id')->orderBy('productQuantity', $this->orderValue)->get();
            return view('livewire.admin.products.products-table', ['products' => $sortedProducts]);
        } else if ($this->orderField != "") {
            return view('livewire.admin.products.products-table', ['products' => Product::whereIn('id', $this->productsIds)->orderBy($this->orderField, $this->orderValue)->get()]);
        }

        return view('livewire.admin.products.products-table', ['products' => Product::whereIn('id', $this->productsIds)->get()]);
    }

    public function orderBy($field)
    {
        if ($this->orderField == $field) {
            if ($this->orderValue == "") {
                $this->orderValue = "asc";
            } else if ($this->orderValue == "asc") {
                $this->orderValue = "desc";
            } else if ($this->orderValue == "desc") {
                $this->orderValue = "";
                $this->orderField = "";
            }
        } else {
            $this->orderField = $field;
            $this->orderValue = "asc";
        }
    }
}
