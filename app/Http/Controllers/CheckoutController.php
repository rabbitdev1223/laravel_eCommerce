<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __invoke()
    {
        
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        
        if ($cartItems->count() < 1) {
            return redirect()->route('home');
        }
        
        $cartTotal = 0;
        
        foreach ($cartItems as $cartItem) {
            $cartTotal += $cartItem->quantity;
        }
        
        
        return view('frontend.checkout.index', compact('cartTotal'));
    }
}
