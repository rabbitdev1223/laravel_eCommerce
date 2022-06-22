<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'product_attribute_type_id',
        'value',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'product_attribute_type_id' => 'integer',
    ];


    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }

    public function productAttributeType()
    {
        return $this->belongsTo(\App\Models\ProductAttributeType::class);
    }
}
