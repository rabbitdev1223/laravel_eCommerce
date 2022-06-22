<div>
	<table class="table mb-0 align-middle table-rounded table-flush">
    <thead>
        <tr class="py-4 border-gray-200 text-dark fw-bolder fs-6 border-bottom">
            <th class="min-w-200px">Product</th>
            <th class="text-center min-w-100px">Quantity</th>
            <th class="text-end min-w-80px">Price</th>
            <th class="min-w-80px"></th>
        </tr>
    </thead>
    <tbody>
        {{-- begin item --}}
        @foreach ($cartItems as $cartItem)
        <tr class="py-5 border-gray-300 border-bottom fs-6">
            <td class="w-50">
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                        <img src="{{ route('images', ['image_id' => $cartItem->item->product->image_id, 'size' => 100]) }}"
                            alt="Cordova Caliber High Performance Cut Resistant Gloves">
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                        <a href="{{ route('products.show', $cartItem->item->product_id) }}"
                            class="text-gray-800 fs-6 text-hover-primary fw-bold">{{ $cartItem->item->product->title }}</a>
                        <span class="fs-7 text-muted fw-bold">{{ $cartItem->item->formattedOptions() }}</span>
                    </div>
                    <!--end::Title-->
                </div>
            </td>
            <td class="text-center">
                <button wire:click="$emit('removeItem', {{ $cartItem->item->id }})"
                    class="btnQuantity btn btn-sm btn-icon btn-light-primary me-2" type="button" style="height: 24px; width: 24px;">
                    <i class="bi bi-dash fs-2"></i>
                </button>
                <span class='quantity'>{{ $cartItem->quantity }}</span>
                <button wire:click="$emit('addItemInCart', {{ $cartItem->item->id }})"
                    class="btnQuantity btn btn-sm btn-icon btn-light-primary ms-2" type="button" style="height: 24px; width: 24px;">
                    <i class="bi bi-plus fs-2"></i>
                </button>
            </td>
            <td class="text-end fw-bolder">
                ${{ number_format(($cartItem->item->sale_price / 100)*$cartItem->quantity, 2) }}</td>
            <td class="text-end">
                <button wire:click="$emit('deleteItem', {{ $cartItem->item->id }})" class="btnRemoveItem btn btn-icon btn-sm btn-light-danger" style="height: 24px; width: 24px;">
                    <!--begin::Svg Icon | path: assets/media/icons/duotone/Navigation/Close.svg-->
                    <span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                            version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                <rect fill="#000000" opacity="0.5"
                                    transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) "
                                    x="0" y="7" width="16" height="2" rx="1" />
                            </g>
                        </svg></span>
                    <!--end::Svg Icon--></button>
            </td>
        </tr>
        @endforeach

        {{-- begin subtotal --}}
        <tr class="pt-5 border-gray-300 border-bottom fs-6">
            <td></td>

            <td></td>
            <td class="text-end text-muted">Subtotal</td>
            <td class="text-end text-primary fs-4 fw-bolder"><span class="ms-4">${{ number_format($cartTotal / 100, 2) }}</span></td>
        </tr>
    </tbody>
</table>



@push('scripts')
<script type="text/javascript">

$(function(){
	$('.btnQuantity').on('click',function(){
		setTimeout(function(){ 
			var total = 0;
            var quantities = $('.quantity');
            $.each(quantities , function(index, obj) { 
				total = parseInt($(obj).html()) + total;
    		});
			  
		  	$('.total_items').html('('+total+' products)');
		 }, 1000);
		
		
	});

	$('.btnRemoveItem').on('click',function(){
		setTimeout(function(){ 
			var total = 0;
            var quantities = $('.quantity');
            $.each(quantities , function(index, obj) { 
				total = parseInt($(obj).html()) + total;
    		});
			  
		  	$('.total_items').html('('+total+' products)');
		 }, 1000);
	});
});

</script>
@endpush
	
</div>