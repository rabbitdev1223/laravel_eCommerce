<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedProduct extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'related_product_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'related_product_id' => 'integer',
    ];


    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }

    public function relatedProduct()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }
}
