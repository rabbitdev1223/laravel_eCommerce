<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Helpers\USPS;
use App\Models\Cart;
use App\Models\City;
use App\Models\Order;
use App\Models\Setting;
use App\Models\State;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\OrderItem;

class PurchaseOrder extends Component
{
    public $po;

    public $is_po;

    protected $listeners = ['render'];

    public function mount()
    {
        // $this->is_po = true;

        // $this->po = time()."".Auth::user()->id;
    }

    public function render()
    {

        return view('livewire.frontend.checkout.purchase-order');
    }

    public function updatedPo($value)
    {
        $this->validate([
            'po' => ['required', 'min:5', 'unique:orders,purchase_order_code']
        ]);

        $this->is_po = true;
    }

    public function createOrder()
    {
        $this->validate([
            'po' => ['required', 'min:5', 'unique:orders,purchase_order_code']
        ]);
        
       
        $address = auth()->user()->addresses->first();
        
        if(!$address){
            $this->emit("validateAddress");
            return;
        }
        
       
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();

        if ($cartItems->count() < 1) {
            return redirect()->route('orders.index');
        }

        $cartTotal = 0;

        foreach ($cartItems as $cartItem) {
            $cartTotal += $cartItem->quantity * $cartItem->item->sale_price;
        }

        $order = Order::create([
            'user_id' => auth()->id(),
            'total' => $cartTotal,
            'purchase_order_code' => strtoupper($this->po),
            'payment_status_id' => 7,
            'payment_method_id' => 1,
            'fulfillment_status_id' => 2,
            'order_status_id' => 1,
            'address_type' => 'shipping',
            'address' => auth()->user()->addresses->first()->address,
            'address_2' => auth()->user()->addresses->first()->address_2,
            'city_id' => auth()->user()->addresses->first()->city_id,
            'zipcode' => auth()->user()->addresses->first()->zipcode
        ]);

        $cartItems->each(function ($item) use ($order) {
            OrderItem::create([
                'item_id' => $item->item_id,
                'order_id' => $order->id,
                'quantity' => $item->quantity,
                'sale_price' => $item->item->sale_price,
                'cost_price' => $item->item->cost_price,
                'points' => $item->item->sale_price * Setting::where('title', 'cashback_percentage')->first()->value
            ]);
        });

        $cartItems->each(function ($item) {
            $item->delete();
        });

        session()->flash('message', 'Order successfully created.');

        event(new \App\Events\OrderCreated($order));

        return redirect()->route('orders.index');
    }
}
