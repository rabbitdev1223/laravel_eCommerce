<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'item_uom_id',
        'sale_price',
        'cost_price',
        'stock_status_id',
        'quantity',
        'image_id',
        'weight',
        'length',
        'width',
        'height',
        'mpn',
        'internal_number',
        'model_number',
        'part_number',
        'is_active'

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'item_uom_id' => 'integer',
        'sale_price' => 'integer',
        'cost_price' => 'integer',
        'stock_status_id' => 'integer',
        'quantity' => 'integer',
        'image_id' => 'integer',
        'weight' => 'decimal:2',
        'length' => 'decimal:2',
        'width' => 'decimal:2',
        'height' => 'decimal:2',
    ];


    public function itemOptions()
    {
        return $this->hasMany(\App\Models\ItemOption::class);
    }

    public function carts()
    {
        return $this->hasMany(\App\Models\Cart::class);
    }

    public function images()
    {
        return $this->morphMany(\App\Models\Image::class, 'imageable');
    }

    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }

    public function itemUom()
    {
        return $this->belongsTo(\App\Models\ItemUom::class);
    }

    public function stockStatus()
    {
        return $this->belongsTo(\App\Models\StockStatus::class);
    }

    public function image()
    {
        return $this->belongsTo(\App\Models\Image::class);
    }

    public function formattedPrice()
    {
        return '$' . number_format($this->sale_price / 100, 2);
    }

    public function formattedOptions()
    {
        $options = '';

        foreach ($this->itemOptions as $option) {
            $options = $options . $option->itemOptionType->title . ': ' . $option->itemOptionValue->title . ' ';
        }

        return $options;
    }
}
