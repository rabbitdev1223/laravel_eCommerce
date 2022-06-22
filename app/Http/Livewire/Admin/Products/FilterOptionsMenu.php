<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\Manufacturer;

class FilterOptionsMenu extends Component
{
    public $page;

    public $productName;
    public $manufacturerId;
    public $minPrice;
    public $maxPrice;
    public $internalNumber;

    public $manufacturers;

    public function mount($page, $productName, $internalNumber, $manufacturerId, $minPrice, $maxPrice)
    {
        $this->productName = $productName;
        $this->manufacturerId = $manufacturerId;
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
        $this->internalNumber = $internalNumber;
        $this->page = $page;

        $this->manufacturers = Manufacturer::all();
    }

    public function resetFields()
    {
        $this->productName = "";
        $this->manufacturerId = "";
        $this->minPrice = 0;
        $this->maxPrice = 0;
        $this->internalNumber = "";

        $this->applyFilter();
    }

    // public function updated($propertyName, $propertyValue)
    // {
    //     if ($propertyName == 'minPrice' && $propertyValue == '') {
    //         $this->minPrice = 0;
    //     }
    // }

    public function changePrice($mode)
    {
        if ($mode == 'decrease-min') {
            $this->minPrice = intval($this->minPrice) == 0 ? 0 : $this->minPrice - 1;
        }
        if ($mode == 'increase-min') {
            $this->minPrice = intval($this->minPrice) == 0 ? 1 : $this->minPrice + 1;
        }
        if ($mode == 'decrease-max') {
            $this->maxPrice = intval($this->maxPrice) == 0 ? 0 : $this->maxPrice - 1;
        }
        if ($mode == 'increase-max') {
            $this->maxPrice = intval($this->maxPrice) == 0 ? 1 : $this->maxPrice + 1;
        }
    }

    public function applyFilter()
    {
        $filters = ['page' => $this->page];
        if (strlen($this->productName) > 0) {
            $filters['page'] = 1;
            $filters['productName'] = $this->productName;
        }
        if (strlen($this->internalNumber) > 0) {
            $filters['page'] = 1;
            $filters['internalNumber'] = $this->internalNumber;
        }
        if (intval($this->manufacturerId) > 0) {
            $filters['page'] = 1;
            $filters['manufacturerId'] = $this->manufacturerId;
        }
        if (intval($this->minPrice) > 0) {
            $filters['page'] = 1;
            $filters['minPrice'] = $this->minPrice;
        }
        if (intval($this->maxPrice) > 0) {
            $filters['page'] = 1;
            $filters['maxPrice'] = $this->maxPrice;
        }

        $url = route('admin.products.index', $filters);
        return redirect($url);
    }

    public function render()
    {
        return view('livewire.admin.products.filter-options-menu');
    }
}
