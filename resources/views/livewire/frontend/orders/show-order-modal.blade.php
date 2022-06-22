<div class="modal-content">
    @if ($order)
    {{-- <div class="modal-header">
        <h5 class="modal-title">
            Order

        </h5>


        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
            <span class="svg-icon svg-icon-2x">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                        fill="#000000">
                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                        <rect fill="#000000" opacity="0.5"
                            transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                            x="0" y="7" width="16" height="2" rx="1"></rect>
                    </g>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Close-->
    </div> --}}
    <div class="modal-header">
        <h5 class="modal-title">
            <img alt="Logo" src="{{ route('images', ['size' => 35, 'type' => 'logo']) }}" class="h-35px me-1" />

            PO#: {{ $order->purchase_order_code }}

        </h5>
        <h5 class="modal-title">
            Created: {{ $order->created_at->format('m/d/Y') }}
        </h5>
    </div>

    <div class="modal-body">
        <table class="table mb-0 align-middle table-rounded table-flush">
            <thead>
                <tr class="py-4 border-gray-200 text-dark fw-bolder fs-6 border-bottom">
                    <th>Product</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-end">Price</th>
                </tr>
            </thead>
            <tbody>
                {{-- begin item --}}
                @foreach ($orderItems as $orderItem)
                <tr class="py-5 border-gray-300 border-bottom fs-6">
                    <td class="w-50">
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-4">
                                <img src="{{ route('images', ['image_id' => $orderItem->item->product->image_id, 'size' => 100]) }}"
                                    alt="Cordova Caliber High Performance Cut Resistant Gloves">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column">
                                <a href="{{ route('products.show', $orderItem->item->product->slug) }}"
                                    class="text-gray-800 fs-6 text-hover-primary fw-bold">{{ $orderItem->item->product->title }}</a>
                                <span class="fs-7 text-muted fw-bold">{{ $orderItem->item->formattedOptions() }}</span>
                            </div>
                            <!--end::Title-->
                        </div>
                    </td>
                    <td class="text-center">
                        <span>{{ $orderItem->quantity }}</span>
                    </td>
                    <td class="text-end fw-bolder">
                        ${{ number_format(($orderItem->sale_price / 100)*$orderItem->quantity, 2) }}</td>

                </tr>
                @endforeach

                {{-- begin subtotal --}}
                <tr class="pt-5 border-gray-300 border-bottom fs-6">
                    <td></td>


                    <td class="text-end text-muted">Subtotal</td>
                    <td class="text-end text-primary fs-4 fw-bolder">${{ number_format($order->total / 100, 2) }}</td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="modal-footer justify-content-between">
        <div>

            @if ($order->order_status_id == 1)
            <span class="me-2 badge badge-light-primary">{{ $order->orderStatus->title }}</span>
            @elseif($order->order_status_id ==2)
            <span class="me-2 badge badge-light-secondary">{{ $order->orderStatus->title }}</span>
            @else
            <span class="me-2 badge badge-light-info">{{ $order->orderStatus->title }}</span>
            @endif

            @if ($order->payment_status_id == 1)
            <span class="me-2 badge badge-light-primary">{{ $order->paymentStatus->title }}</span>
            @elseif($order->payment_status_id == 2)
            <span class="me-2 badge badge-light-success">{{ $order->paymentStatus->title }}</span>
            @elseif($order->payment_status_id == 3)
            <span class="me-2 badge badge-light-warning">{{ $order->paymentStatus->title }}</span>
            @elseif($order->payment_status_id == 4)
            <span class="me-2 badge badge-light-warning">{{ $order->paymentStatus->title }}</span>
            @elseif($order->payment_status_id == 5)
            <span class="me-2 badge badge-light-dark">{{ $order->paymentStatus->title }}</span>
            @elseif($order->payment_status_id == 6)
            <span class="me-2 badge badge-light-info">{{ $order->paymentStatus->title }}</span>
            @elseif($order->payment_status_id == 7)
            <span class="me-2 badge badge-light-danger">{{ $order->paymentStatus->title }}</span>
            @else
            <span class="me-2 badge badge-light-info">{{ $order->paymentStatus->title }}</span>
            @endif

            @if ($order->fulfillment_status_id == 1)
            <span class="me-2 badge badge-light-success">{{ $order->fulfillmentStatus->title }}</span>
            @elseif($order->fulfillment_status_id == 2)
            <span class="me-2 badge badge-light-primary">{{ $order->fulfillmentStatus->title }}</span>
            @elseif($order->fulfillment_status_id == 3)
            <span class="me-2 badge badge-light-warning">{{ $order->fulfillmentStatus->title }}</span>
            @elseif($order->fulfillment_status_id == 4)
            <span class="me-2 badge badge-light-info">{{ $order->fulfillmentStatus->title }}</span>
            @else
            <span class="me-2 badge badge-light-warning">{{ $order->fulfillmentStatus->title }}</span>
            @endif
        </div>
        <div>

            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>

            {{-- <div class="btn-group">
                <button wire:click="sendOrder({{ $order->id }})" class="btn btn-light-primary btn-icon"><i
                class="bi bi-envelope-fill"></i></button>
            <button class="btn btn-light-primary btn-icon"
                onclick="navigator.clipboard.writeText('{{ route('orders.invoices.show', $order->id) }}').then(toastr.success('URL copied to clipboard.'))"><i
                    class="bi bi-clipboard"></i>
            </button>
            <div class="btn btn-light-primary btn-icon"
                onclick="printJS('{{ route('orders.invoices.show', $order->id) }}')"><i class="bi bi-printer-fill"></i>
            </div>
            <a href="{{ route('orders.invoices.show', $order->id) }}" target="_blank"
                class="btn btn-light-primary btn-icon"><i class="bi bi-cloud-download-fill"></i></a>
        </div> --}}

    </div>
</div>
@endif
</div>
