<?php

namespace App\Http\Livewire\Frontend\Checkout;

use Livewire\Component;
use App\Models\Cart as ActualCart;
use Illuminate\Support\Facades\DB;

class OrderSide extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $cartTotal = 0;
        $cartItems = [];
        if (auth()->user()) {
            $cartItems = ActualCart::where('user_id', auth()->user()->id)->latest()->get();

            foreach ($cartItems as $cartItem) {
                $cartTotal += $cartItem->quantity * $cartItem->item->sale_price;
            }
        }
        $cartCount = DB::table('carts')
            ->select(DB::raw('SUM(quantity) as nSUM'))
            ->where('user_id', auth()->user()->id)
            ->get()
            ->first()->nSUM;

        return view('livewire.frontend.checkout.order-side', compact('cartItems', 'cartTotal', 'cartCount'));
    }
}
