<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemOption extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id',
        'item_option_value_id',
        'item_option_type_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'item_id' => 'integer',
        'item_option_value_id' => 'integer',
        'item_option_type_id' => 'integer',
    ];


    public function carts()
    {
        return $this->hasMany(\App\Models\Cart::class);
    }

    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class);
    }

    public function itemOptionValue()
    {
        return $this->belongsTo(\App\Models\ItemOptionValue::class);
    }

    public function itemOptionType()
    {
        return $this->belongsTo(\App\Models\ItemOptionType::class);
    }
}
