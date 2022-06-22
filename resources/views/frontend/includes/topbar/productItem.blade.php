@forelse ($cartItems as $cartItem)
<div class="py-4 d-flex flex-stack">
    <!--begin::Section-->
    <div class="d-flex align-items-center">

        <!--begin::Title-->
        <div class="mb-0 me-2">
            <a href="{{ route('products.show', $cartItem->item->product_id) }}"
                class="text-gray-800 fs-6 text-hover-primary fw-bolder">{{ $cartItem->item->product->title }}</a>
            <div class="text-gray-400 fs-7">{{ $cartItem->item->formattedOptions() }}</div>
            <div class="text-gray-400 fs-7">{{ $cartItem->item->product->formattedCategories() }}</div>
            <div class="mt-2 d-flex align-items-center">
                <span
                    class="font-weight-bold me-1 text-dark-75 font-size-lg">${{ number_format(($cartItem->item->sale_price / 100)*$cartItem->quantity, 2) }}</span>
                <span class="text-muted me-1">for</span>
                <span class="font-weight-bold me-2 text-dark-75 font-size-lg">{{ $cartItem->quantity }}</span>
                <button wire:click="$emit('removeItem', {{ $cartItem->item_id }})"
                    class="btn btn-sm btn-icon btn-light-primary me-2" type="button" style="height: 24px; width: 24px;">
                    <i class="bi bi-dash fs-3"></i>
                </button>
                <button wire:click="$emit('addItemInCart', {{ $cartItem->item_id }})"
                    class="btn btn-sm btn-icon btn-light-primary" type="button" style="height: 24px; width: 24px;">
                    <i class="bi bi-plus fs-3"></i>
                </button>
            </div>
        </div>
        <!--end::Title-->
    </div>
    <!--end::Section-->
    <!--begin::Label-->

    <img src="{{ route('images', ['image_id' => $cartItem->item->product->image_id, 'size' => 100]) }}" alt="">

    <!--end::Label-->
</div>
@if (!$loop->last)
<div class="border-gray-200 separator"></div>
@endif
@empty
<!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center ">
    <!--begin::Icon-->
    <span class="mb-5 svg-icon svg-icon-5tx svg-icon-danger">
        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <path
                d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z"
                fill="#000000" opacity="0.3"></path>
            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"></rect>
            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"></rect>
        </svg>
    </span>
    <!--end::Icon-->
    <!--begin::Message-->
    <div class="pb-15 fw-bold">
        <h3 class="mb-2 text-gray-600 fs-5">No Items In Cart</h3>
        <div class="text-muted fs-7">Please add items first</div>
    </div>
    <!--end::Message-->
</div>
<!--end::Empty-->
@endforelse
