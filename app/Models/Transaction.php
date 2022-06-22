<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'payment_method_id',
        'payment_status_id',
        'order_status_id',
        'fulfillment_status_id',
        'amount',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'payment_method_id' => 'integer',
        'payment_status_id' => 'integer',
        'order_status_id' => 'integer',
        'amount' => 'integer',
    ];


    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(\App\Models\PaymentMethod::class);
    }

    public function paymentStatus()
    {
        return $this->belongsTo(\App\Models\PaymentStatus::class);
    }

    public function orderStatus()
    {
        return $this->belongsTo(\App\Models\OrderStatus::class);
    }
    
    public function formattedTotal()
    {
        return '$' . number_format($this->amount / 100, 2);
    }
}
