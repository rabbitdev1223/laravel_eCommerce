<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'total',
        'is_paid',
        'payment_method_id',
        'payment_status_id',
        'order_status_id',
        'fulfillment_status_id',
        'purchase_order_code',
        'address_type',
        'address',
        'address_2',
        'city_id',
        'zipcode',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'total' => 'integer',
        'is_paid' => 'boolean',
        'payment_method_id' => 'integer',
        'payment_status_id' => 'integer',
        'order_status_id' => 'integer',
        'fulfillment_status_id' => 'integer',
        'city_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
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

    public function fulfillmentStatus()
    {
        return $this->belongsTo(\App\Models\FulfillmentStatus::class);
    }

    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    public function formattedTotal()
    {
        return '$' . number_format($this->total / 100, 2);
    }

//     public function items()
//     {
//         return $this->hasMany(Item::class);
//     }
    
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
    
    public function created_at_difference()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    } 
    
}
