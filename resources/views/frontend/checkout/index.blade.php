<x-content>
    <div class="container mt-md-20 mt-6">
        <div class="row">
            <div class="col-12 col-md-8 order-md-1">
                {{-- users cart --}}
                @include('frontend.checkout.includes.cart')
            </div>
            <div class="order-1 col-12 col-md-4 order-md-2">
                {{-- address form --}}
                @include('frontend.checkout.includes.address')
                {{-- po number --}}
                @include('frontend.checkout.includes.po')
            </div>
{{--            <livewire:frontend.checkout.order-side />--}}
        </div>
    </div>
</x-content>
