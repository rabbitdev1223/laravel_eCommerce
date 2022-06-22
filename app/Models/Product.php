<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'slug',
        'manufacturer_id',
        'seo_keyword',
        'meta_description',
        'meta_keywords',
        'image_id',
        'product_type_id',
        'is_active'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'manufacturer_id' => 'integer',
        'image_id' => 'integer',
        'product_type_id' => 'integer',
    ];


    public function productModels()
    {
        return $this->hasMany(\App\Models\ProductModel::class);
    }

    public function items()
    {
        return $this->hasMany(\App\Models\Item::class);
    }

    public function productAttributes()
    {
        return $this->hasMany(\App\Models\ProductAttribute::class);
    }

    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class);
    }

    public function images()
    {
        return $this->morphMany(\App\Models\Image::class, 'imageable');
    }

    public function manufacturer()
    {
        return $this->belongsTo(\App\Models\Manufacturer::class);
    }

    public function image()
    {
        return $this->belongsTo(\App\Models\Image::class);
    }

    public function productType()
    {
        return $this->belongsTo(\App\Models\ProductType::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function formattedPriceRange()
    {
        $price = '';
        if (count($this->items) > 0) {
            if ($this->items->sortBy('sale_price')->first()->sale_price == $this->items->sortBy('sale_price')->last()->sale_price) {
                $price = '$' . number_format($this->items->sortBy('sale_price')->first()->sale_price / 100, 2);
            } else {
                $price = '$' . number_format($this->items->sortBy('sale_price')->first()->sale_price / 100, 2) . ' - $' . number_format($this->items->sortBy('sale_price')->last()->sale_price / 100, 2);
                // $price = '$' . number_format($this->items->sortBy('sale_price')->first()->sale_price / 100, 2);
            }
        }

        return $price;
    }

    public function formattedCostPriceRange()
    {
        $price = '';
        if (count($this->items) > 0) {
            if ($this->items->sortBy('cost_price')->first()->cost_price == $this->items->sortBy('cost_price')->last()->cost_price) {
                $price = '$' . number_format($this->items->sortBy('cost_price')->first()->cost_price / 100, 2);
            } else {
                $price = '$' . number_format($this->items->sortBy('cost_price')->first()->cost_price / 100, 2) . ' - $' . number_format($this->items->sortBy('cost_price')->last()->cost_price / 100, 2);
            }
        }

        return $price;
    }

    public function formattedCategories()
    {
        $categories = collect();

        if (!$this->productType) {
            $categories = null;
        } else {
            $categories->push($this->productType->title);
        }

        return $categories->implode(' / ');
    }

    public function allCategories()
    {
        $categories = collect();
        $productType = $this->productType;

        if ($productType) {

            $categories->push($productType->title);
            $sub_cat = $productType->productType();
            if ($sub_cat) {
                $categories->push($sub_cat->title);

                $sub_cat2 = $sub_cat->productType();
                if ($sub_cat2) {
                    $categories->push($sub_cat2->title);

                    $sub_cat3 = $sub_cat2->productType();
                    if ($sub_cat3) {
                        $categories->push($sub_cat3->title);
                    }
                }
            }
        }

        return $categories->reverse();
    }
}
