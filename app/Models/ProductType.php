<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'product_type_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_type_id' => 'integer',
    ];


    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    public function productType()
    {
//         return $this->belongsTo(\App\Models\ProductType::class);
        return ProductType::find($this->product_type_id);
    }
}
