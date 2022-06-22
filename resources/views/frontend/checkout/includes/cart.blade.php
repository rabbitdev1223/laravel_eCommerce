<div class="row">
    <div class="col">
        <div class="card">
            <div class="pb-0 card-body d-flex justify-content-between align-items-center">
                <h1 class="mb-0 text-dark fw-bolder fs-3">My Shopping Cart <span
                        class="text-muted fs-6 fw-bold total_items">({{ $cartTotal }} products)</span></h1>
                <a href="{{ route('home') }}" class="btn btn-sm btn-light-primary">Continue Shopping</a>
            </div>
            <div class="card-body table-responsive ">
                <livewire:frontend.checkout.cart />
            </div>
        </div>
    </div>
</div>
