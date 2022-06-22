<?php

namespace App\Http\Livewire\Frontend\Favorites;

use Livewire\Component;

class ListProducts extends Component
{
    protected $listeners = ['favoritesToggle' => 'render'];

    public function render()
    {
        $products = auth()->user()->favorites;

        return view('livewire.frontend.favorites.list-products', compact('products'));
    }
}
