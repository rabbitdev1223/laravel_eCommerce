<div class="d-flex flex-column bgi-no-repeat rounded-top bg-primary">
    <!--begin::Title-->
    <h3 class="mt-10 mb-6 text-white fw-bold px-9">Shopping Cart
        <span class="opacity-75 fs-8 ps-3">{{ $cartCount ? $cartCount : 0 }}
            {{ Illuminate\Support\Str::plural('item', $cartCount ? $cartCount : 0) }}</span></h3>
    <!--end::Title-->
</div>
