<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Cart as ActualCart;
use Livewire\Component;

class Cart extends Component
{
    protected $listeners = ['render', 'checkoutPageRedirect'];

    public function render()
    {
        if (ActualCart::where('user_id', auth()->user()->id)->latest()->get()->count() < 1) {
            return redirect()->route('home');
        }

        $cartTotal = 0;
        $cartItems = [];
        if (auth()->user()) {
            $cartItems = ActualCart::where('user_id', auth()->user()->id)->latest()->get();

            foreach ($cartItems as $cartItem) {
                $cartTotal += $cartItem->quantity * $cartItem->item->sale_price;
            }
        }

        return view('livewire.frontend.checkout.cart', compact('cartItems', 'cartTotal'));
    }

    public function checkoutPageRedirect()
    {
        return redirect()->route('home');
    }
}
