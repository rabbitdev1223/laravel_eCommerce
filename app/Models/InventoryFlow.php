<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryFlow extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id',
        'quantity',
        'is_leaving',
        'sale_price',
        'cost_price',
        'location_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'item_id' => 'integer',
        'quantity' => 'integer',
        'is_leaving' => 'boolean',
        'sale_price' => 'integer',
        'cost_price' => 'integer',
        'location_id' => 'integer',
        'user_id' => 'integer',
    ];


    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class);
    }

    public function location()
    {
        return $this->belongsTo(\App\Models\Location::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
