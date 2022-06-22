<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use App\Models\Item;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CartCounter extends Component
{
    protected $listeners = ['addItem', 'removeItem', 'clearCart', 'addItemInCart', 'deleteItem'];

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

        return view('livewire.frontend.cart.cart-counter', compact('cartCount'));
    }

    public function addItem(Item $item, $quantity = 1)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('item_id', $item->id)->first();

        if ($cart) {
            $cart->update([
                'quantity' => $cart->quantity + $quantity
            ]);
        } else {
            Cart::create([
                'user_id' => auth()->user()->id,
                'quantity' => $quantity,
                'item_id' => $item->id
            ]);
        }

        $this->dispatchBrowserEvent('test');
        // $this->dispatchBrowserEvent('toastr', $item->product->title . ' added to cart!');

        $this->emit('render');
    }

    public function clearCart()
    {
        Cart::where('user_id', auth()->user()->id)->delete();

        $this->emit('render');

        $this->emit('checkoutPageRedirect');

        $this->dispatchBrowserEvent('toastr', 'Cart Cleared!');
    }

    public function removeItem(Item $item)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('item_id', $item->id)->first();

        if ($cart) {

            if ($cart->quantity == 1) {
                $cart->delete();
            } else {
                $cart->update([
                    'quantity' => $cart->quantity - 1
                ]);
            }
        }
        $this->emit('render');

        $this->dispatchBrowserEvent('toastr', $item->product->title . ' removed!');
    }

    public function addItemInCart(Item $item, $quantity = 1)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('item_id', $item->id)->first();

        if ($cart) {
            $cart->update([
                'quantity' => $cart->quantity + $quantity
            ]);
        } else {
            Cart::create([
                'user_id' => auth()->user()->id,
                'quantity' => $quantity,
                'item_id' => $item->id
            ]);
        }

        $this->emit('render');

        $this->dispatchBrowserEvent('toastr', $item->product->title . ' added to cart!');
    }

    public function deleteItem(Item $item)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('item_id', $item->id)->first();

        if ($cart) {

            $cart->delete();
        }
        $this->emit('render');

        $this->dispatchBrowserEvent('toastr', $item->product->title . ' cleared from cart!');

        if (Cart::where('user_id', auth()->id())->get()->count() < 1) {
            $this->emit('checkoutPageRedirect');
        }
    }
}
