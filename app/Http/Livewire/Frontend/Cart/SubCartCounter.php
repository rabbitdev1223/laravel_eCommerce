<?php

namespace App\Http\Livewire\Frontend\Cart;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SubCartCounter extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $cartCount = 0;

        if (auth()->user()) {
            $cartCount = DB::table('carts')
                ->select(DB::raw('SUM(quantity) as nSUM'))
                ->where('user_id', auth()->user()->id)
                ->get()
                ->first()->nSUM;
        }

        return view('livewire.frontend.cart.sub-cart-counter', compact('cartCount'));
    }
}
