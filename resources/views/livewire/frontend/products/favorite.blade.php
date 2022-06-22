<div class="mx-4">
    @if ($is_favorited)
    <button wire:click='removeFavorite({{ $product->id }})' class="btn btn-light-warning"
        wire:loading.attr='disabled'><i class="bi bi-heart-fill"></i>Unfavorite</button>
    @else
    <button wire:click='addFavorite({{ $product->id }})' class="btn btn-danger" wire:loading.attr='disabled'><i
            class="bi bi-heart-fill"></i>Favorite</button>
    @endif
</div>
