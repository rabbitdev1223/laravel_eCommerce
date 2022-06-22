<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\ProductType;

class SelectCategoryMenu extends Component
{
    public $selectedSortedCategoryId;
    public $selectedSortedCategoryTitle;

    protected $listeners = ['categoryUpdatedFromProductForm'];

    public function mount()
    {
        $this->selectedSortedCategoryId = "";
        $this->selectedSortedCategoryTitle = "";
    }

    public function resetFields()
    {
    }

    public function categoryUpdatedFromProductForm($category_id)
    {
        $this->selectedSortedCategoryId = $category_id;
        $selectedCategory = ProductType::find($category_id)->first();
        if ($selectedCategory) {
            $this->selectedSortedCategoryTitle = $selectedCategory->title;
        } else {
            $this->selectedSortedCategoryTitle = "";
        }
    }

    public function menuItemClick($clickedSortedCategoryId, $clickedSortedCategoryTitle)
    {
        $this->selectedSortedCategoryId = $clickedSortedCategoryId;
        $this->selectedSortedCategoryTitle = $clickedSortedCategoryTitle;

        $this->emitTo('admin.products.product-form', 'categoryUpdatedFromCategoryMenu', ["category_id" => $this->selectedSortedCategoryId]);
    }

    public function getFormattedCategoriesData()
    {
        $result = collect();
        $parentCategories = collect();
        $rootCategories = ProductType::whereNull('product_type_id')->get();
        $remainingCategories = ProductType::whereNotNull('product_type_id')->get();

        foreach ($rootCategories as $key => $category) {
            $parentCategories->push(['id' => $category->id, 'title' => $category->title, 'sortKey' => $key]);
        }
        $result = $parentCategories;

        while ($remainingCategories->count() > 0) {
            $tempParentCategories = collect();
            foreach ($parentCategories as $parentCategory) {
                $tempRemainingCategories = $remainingCategories;
                foreach ($tempRemainingCategories as $key => $remainingCategory) {
                    if (intval($remainingCategory->product_type_id) == intval($parentCategory['id'])) {
                        $tempParentCategories->push(['id' => $remainingCategory->id, 'title' => $remainingCategory->title, 'sortKey' => $parentCategory['sortKey'] . '-' . $key]);
                        $remainingCategories->pull($key);
                    }
                }
            }
            $parentCategories = $tempParentCategories;
            $result = $result->merge($parentCategories);
        }

        return $result->sortBy('sortKey');
    }

    public function render()
    {
        $sortedCategories = $this->getFormattedCategoriesData();
        return view('livewire.admin.products.select-category-menu', ['sortedCategories' => $sortedCategories]);
    }
}
