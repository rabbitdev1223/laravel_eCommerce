<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ShowCart extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $cartTotal = 0;
        $cartItems = [];
        if (auth()->user()) {
            $cartItems = Cart::where('user_id', auth()->user()->id)->latest()->get();

            foreach ($cartItems as $cartItem) {
                $cartTotal += $cartItem->quantity * $cartItem->item->sale_price;
            }
        }

        return view('livewire.frontend.cart.show-cart', compact('cartTotal', 'cartItems'));
    }

    public function clearCart()
    {
        $this->emit('clearCart');

        $this->dispatchBrowserEvent('test');
    }
}
