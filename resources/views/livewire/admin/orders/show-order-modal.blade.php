<div class="modal-content">
    @if ($order)
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
        <div class="row">
            <div class="col">
                <select wire:model='order_status' class="form-select form-select-solid" aria-label="Select example">
                    @foreach ($orderStatuses as $orderStatus)
                    <option wire:key='order-status-{{ $orderStatus->id }}' value="{{ $orderStatus->id }}">
                        {{ $orderStatus->title }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <select wire:model='payment_status' class="form-select form-select-solid" aria-label="Select example">
                    @foreach ($paymentStatuses as $paymentStatus)
                    <option wire:key='payment-status-{{ $paymentStatus->id }}' value="{{ $paymentStatus->id }}">
                        {{ $paymentStatus->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <select wire:model='fulfillment_status' class="form-select form-select-solid"
                    aria-label="Select example">
                    @foreach ($fulfillmentStatuses as $fulfillmentStatus)
                    <option wire:key='fulfillment-status-{{ $fulfillmentStatus->id }}'
                        value="{{ $fulfillmentStatus->id }}">
                        {{ $fulfillmentStatus->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="modal-body">
        <table class="table mb-0 align-middle table-rounded table-flush table-hover">
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
        </div>
    </div>
    @endif
</div>
