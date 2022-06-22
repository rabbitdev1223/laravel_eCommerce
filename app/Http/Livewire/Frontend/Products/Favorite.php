<?php

namespace App\Http\Livewire\Frontend\Products;

use App\Models\Product;
use Livewire\Component;

class Favorite extends Component
{
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        $is_favorited = auth()->user()->favorites->pluck('id')->contains($this->product->id);

        return view('livewire.frontend.products.favorite', compact('is_favorited'));
    }

    public function addFavorite($value)
    {
        auth()->user()->favorites()->attach($value);

        $this->emit('favoritesToggle');

        $this->dispatchBrowserEvent('toastr', 'Favorite Added!');
    }

    public function removeFavorite($value)
    {
        auth()->user()->favorites()->detach($value);

        $this->emit('favoritesToggle');

        $this->dispatchBrowserEvent('toastr', 'Favorite Removed!');
    }
}
