<div class="tab-content">
    <!--begin::Tab panel-->
    <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
        <!--begin::Items-->
        <div class="px-8 my-5 scroll-y mh-325px">
            <!--begin::Item-->
            @include('frontend.includes.topbar.productItem')
            <!--end::Item-->
        </div>
        <!--end::Items-->

        @if ($cartItems->count() > 0)
        <!--begin::View more-->
        <div class="px-8 py-3 border-top">
            {{-- <div class="mb-4 d-flex align-items-center justify-content-between">
                <span class="me-2 font-weight-bold text-muted font-size-sm">Total</span>
                <span class="text-right font-weight-bolder text-dark-50">$1840.00</span>
            </div> --}}
            <div class="d-flex align-items-center justify-content-between my-7">
                <span class="me-2 text-muted">Subtotal</span>
                <span class="text-right fw-bolder fs-6 text-primary">${{ number_format($cartTotal / 100, 2) }}</span>
            </div>

            <div class="pb-4 d-flex justify-content-between align-items-center">
                <button wire:click="clearCart" type="button" class="btn btn-sm btn-light-danger">Clear
                    Cart</button>



                <a href="{{ route('checkout') }}" class="btn btn-primary">Place Order</a>

            </div>
        </div>
        <!--end::View more-->
        @endif

    </div>
    <!--end::Tab panel-->

</div>
