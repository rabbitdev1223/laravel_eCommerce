<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Manufacturer;
use App\Models\Image;
use App\Models\Item;
use App\Models\Tag;
use App\Models\Taggable;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ProductForm extends Component
{
    use WithFileUploads;

    public $product;
    public $product_id;
    public $modal_title;

    public $title;
    public $is_active;
    public $description;
    public $slug;
    public $manufacturer_id;
    public $seo_keyword;
    public $meta_description;
    public $meta_keywords;
    public $image_id;
    public $product_type_id;
    public $items;
    public $search;

    public $imagesToUpload = [];
    public $product_images;

    public $manufacturers;
    public $productTypes;

    public $elements_links;
    public $orderField;
    public $orderValue;

    protected $listeners = ['toggleProduct', 'itemUpdated', 'deleteProductItem', 'deleteProduct', 'categoryUpdatedFromCategoryMenu'];

    protected $rules = [
        'title' => ['required', 'string'],
        'description' => ['required', 'string'],
        'slug' => ['required', 'string'],
        'manufacturer_id' => ['required']
    ];

    public function mount()
    {
        $this->manufacturers = Manufacturer::all();
        $this->productTypes = ProductType::all();

        $this->orderField = "";
        $this->orderValue = "";
        $this->resetFields();
    }

    public function getDirectSubCategories($categoryId)
    {
        return ProductType::all()->filter(function ($category) use ($categoryId) {
            return $category->product_type_id == $categoryId;
        });
    }

    public function render()
    {
        return view('livewire.admin.products.product-form');
    }

    public function submit()
    {
    }

    public function resetFields()
    {
        $this->product_id = null;
        $this->title = "";
        $this->is_active = true;
        $this->description = "";
        $this->slug = "";
        $this->manufacturer_id = "";
        $this->seo_keyword = "";
        $this->meta_description = "";
        $this->meta_keywords = "";

        $this->image_id = null;
        $this->product_type_id = null;
        $this->search = "";

        $this->product_images = [];
        $this->items = [];
    }

    public function categoryUpdatedFromCategoryMenu($params)
    {
        $this->product_type_id = $params['category_id'];
    }

    public function toggleProduct($productId)
    {
        if ($productId == 0) {
            $this->modal_title = "Add New Product";
        } else {
            $this->modal_title = "Modify Product";
        }

        $this->resetFields();

        $this->product_id = $productId;
        $this->load();

        $this->emitTo('admin.products.select-category-menu', 'categoryUpdatedFromProductForm', ["category_id" => $this->product_type_id]);
    }

    public function itemUpdated()
    {
        $this->items = $this->product->items;
    }

    public function load()
    {
        if (intval($this->product_id) == 0) {
            $this->emit('valuesUpdated', ['manufacturer_id' => null]);
        } else if (intval($this->product_id) > 0) {
            $this->product = Product::find($this->product_id);

            $this->title = $this->product->title;
            $this->is_active = $this->product->is_active;
            $this->description = $this->product->description;
            $this->slug = $this->product->slug;
            $this->manufacturer_id = $this->product->manufacturer_id;

            $this->seo_keyword = $this->product->seo_keyword;
            $this->meta_description = $this->product->meta_description;
            $this->meta_keywords = $this->product->meta_keywords;

            $this->image_id = $this->product->image_id;
            $this->product_type_id = $this->product->product_type_id;

            $this->items = $this->product->items;
            $this->product_images = $this->product->images;

            $this->emit('valuesUpdated', ['manufacturer_id' => $this->manufacturer_id, 'seo_keyword' => $this->seo_keyword, 'meta_keywords' => $this->meta_keywords]);
        } else {
            return;
        }
    }

    public function productImageRadioClickHandler($productImageId)
    {
        $this->image_id = $productImageId;

        $this->dispatchBrowserEvent('toastr', 'Default Product Image has changed!');
    }

    public function deleteImageHandler($productImageId)
    {
        if ($productImageId == $this->image_id) {
            $this->product->image_id = null;
            $this->product->save();
        }

        foreach ($this->product->items as $item) {
            if ($item->image_id == $productImageId) {
                $item->image_id = null;
                $item->save();
            }
        }

        $imageToDelete = Image::find($productImageId);
        $imageToDelete->delete();

        $this->product_images = Product::find($this->product_id)->images;
        if ($productImageId == $this->image_id) {
            if ($this->product_images->count() > 0) {
                $firstImageId = $this->product_images->first()->id;
                $this->image_id = $firstImageId;
                $this->product->image_id = $firstImageId;
                $this->product->update(['image_id' => $firstImageId]);
            } else {
                $this->image_id = null;
            }
        }

        $firstImageId = $this->product_images->first()->id;
        foreach ($this->product->items as $item) {
            if (!$item->image_id) {
                $item->image_id = $firstImageId;
                $item->save();
            }
        }

        $this->items = Item::where('product_id', '=', $this->product_id)->get();

        $this->dispatchBrowserEvent('toastr', 'Product Image Removed');
    }

    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value, '-');
    }

    public function updatedImagesToUpload()
    {
        $this->validate([
            'imagesToUpload.*' => 'image|max:1024', // 1MB Max
        ]);

        $uploadedImages = [];
        foreach ($this->imagesToUpload as $image) {
            $uploadedImagePath = $image->store('products');
            array_push($uploadedImages, Image::create([
                'alt' => $this->title,
                'src' => $uploadedImagePath,
                'imageable_id' => $this->product_id,
                'imageable_type' => 'App\Models\Product'
            ]));
        }

        if (!$this->image_id) {
            $this->image_id = $uploadedImages[0]->id;
            $this->product->image_id = $this->image_id;
            $this->product->save();
        }

        $this->product_images = Product::find($this->product_id)->images;

        $this->dispatchBrowserEvent('toastr', 'Product Images Added');
    }

    public function deleteProductItem($itemIdToDelete)
    {
        Item::find($itemIdToDelete)->delete();
        $this->dispatchBrowserEvent('toastr', 'Product Item Deleted');
        $this->load();
    }

    public function deleteProduct($productId)
    {
        Product::find($productId)->delete();
        return redirect(url()->previous());
    }

    public function toggleActive()
    {
        $this->is_active = !$this->is_active;
    }

    public function save()
    {
        $this->validate();

        $updatedProduct = Product::updateOrCreate(
            ['id' => $this->product_id],
            [
                'title' => $this->title,
                'is_active' => $this->is_active,
                'description' => $this->description,
                'slug' => $this->slug,
                'manufacturer_id' => $this->manufacturer_id,
                'seo_keyword' => $this->seo_keyword,
                'meta_description' => $this->meta_description,
                'meta_keywords' => $this->meta_keywords,
                'image_id' => $this->image_id,
                'product_type_id' => $this->product_type_id,
            ]
        );

        $meta_keywords_tags = $this->meta_keywords ? explode(',', $this->meta_keywords) : [];
        foreach ($meta_keywords_tags as $tag) {
            if (!Tag::where('title', $tag)->exists()) {
                $createdTag = Tag::create(array('id' => null, 'title' => $tag));
                Taggable::create(array('id' => null, 'tag_id' => $createdTag->id, 'taggable_type' => 'App\Models\Product', 'taggable_id' => $this->product_id));
            } else {
                if (!Taggable::select('taggables.*')->where('taggable_id', '=', $this->product_id)->leftjoin('tags', 'tags.id', '=', 'taggables.tag_id')->where('tags.title', '=', $tag)->exists()) {
                    $tagId = Tag::where('title', $tag)->first()->id;
                    Taggable::create(array('id' => null, 'tag_id' => $tagId, 'taggable_type' => 'App\Models\Product', 'taggable_id' => $this->product_id));
                }
            }
        }

        Taggable::select('taggables.*')->where('taggable_id', '=', $this->product_id)->leftjoin('tags', 'tags.id', '=', 'taggables.tag_id')->whereNotIn('tags.title', $meta_keywords_tags)->groupBy('taggables.id')->delete();

        if ($this->product_id) {
            return redirect(url()->previous());
        } else {
            $this->toggleProduct($updatedProduct->id);
        }
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

        if (!$this->orderValue) {
            $this->items = $this->product->items;
        } else {
            if ($field == 'uom') {
                $this->items = Item::select('items.*')->where('product_id', '=', $this->product_id)->join('item_uoms', 'item_uoms.id', '=', 'items.item_uom_id')->orderBy('item_uoms.title', $this->orderValue)->groupBy('items.id')->get();
            }
            if ($field == 'stock_status') {
                $this->items = Item::select('items.*')->where('product_id', '=', $this->product_id)->join('stock_statuses', 'stock_statuses.id', '=', 'items.stock_status_id')->orderBy('stock_statuses.title', $this->orderValue)->groupBy('items.id')->get();
            }
            if ($field == 'sale_price' || $field == 'cost_price' || $field == 'quantity' || $field == 'internal_number') {
                $this->items = Item::where('product_id', '=', $this->product_id)->orderBy($field, $this->orderValue)->get();
            }
        }
    }
}
