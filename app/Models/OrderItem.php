<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id',
        'order_id',
        'quantity',
        'sale_price',
        'cost_price',
        'points',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'item_id' => 'integer',
        'order_id' => 'integer',
        'quantity' => 'integer',
        'sale_price' => 'integer',
        'cost_price' => 'integer',
        'points' => 'decimal:2',
    ];


    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class);
    }

    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }
    
    public function formattedTotal()
    {
        return '$' . number_format(($this->sale_price * $this->quantity) / 100, 2);
    }
}
