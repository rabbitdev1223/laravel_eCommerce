<x-content>
    <div class="container mt-md-20 mt-6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table align-middle table-rounded table-flush min-w-800px min-w-md-auto">
                            <thead>
                                <tr class="py-4 border-gray-200 fw-bolder border-bottom">
                                    <th>PO#</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Order Status</th>
                                    <th class="text-center">Payment Status</th>
                                    <th class="text-center">Fulfillment Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (auth()->user()->orders->sortByDesc('created_at') as $order)
                                <tr class="py-5 border-gray-300 text-dark border-bottom fs-6">
                                    <td class="">
                                        <button onclick="Livewire.emit('showOrder', {{ $order->id }})"
                                            class=" btn btn-flush text-muted fw-bolder text-hover-primary fs-6"
                                            data-bs-toggle="modal"
                                            data-bs-target="#show_order_modal">{{ $order->purchase_order_code }}</button>
                                    </td>
                                    <td class="text-center">
                                        {{ $order->created_at->format('m/d/Y') }}
                                        {{-- <span class="text-muted fw-bold d-block fs-7">Paid: 1/12/21</span> --}}
                                    </td>
                                    <td
                                        class="text-center fw-bolder {{ $order->is_paid ? 'text-success' : 'text-danger' }} ">
                                        {{ $order->formattedTotal() }}</td>
                                    <td class="text-center">
                                        @if ($order->order_status_id == 1)
                                        <span class="badge badge-light-primary">{{ $order->orderStatus->title }}</span>
                                        @elseif($order->order_status_id ==2)
                                        <span
                                            class="badge badge-light-secondary">{{ $order->orderStatus->title }}</span>
                                        @else
                                        <span class="badge badge-light-info">{{ $order->orderStatus->title }}</span>
                                        @endif

                                    </td>
                                    <td class="text-center">
                                        @if ($order->payment_status_id == 1)
                                        <span
                                            class="badge badge-light-primary">{{ $order->paymentStatus->title }}</span>
                                        @elseif($order->payment_status_id == 2)
                                        <span
                                            class="badge badge-light-success">{{ $order->paymentStatus->title }}</span>
                                        @elseif($order->payment_status_id == 3)
                                        <span
                                            class="badge badge-light-warning">{{ $order->paymentStatus->title }}</span>
                                        @elseif($order->payment_status_id == 4)
                                        <span
                                            class="badge badge-light-warning">{{ $order->paymentStatus->title }}</span>
                                        @elseif($order->payment_status_id == 5)
                                        <span class="badge badge-light-dark">{{ $order->paymentStatus->title }}</span>
                                        @elseif($order->payment_status_id == 6)
                                        <span class="badge badge-light-info">{{ $order->paymentStatus->title }}</span>
                                        @elseif($order->payment_status_id == 7)
                                        <span class="badge badge-light-danger">{{ $order->paymentStatus->title }}</span>
                                        @else
                                        <span class="badge badge-light-info">{{ $order->paymentStatus->title }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($order->fulfillment_status_id == 1)
                                        <span
                                            class="badge badge-light-success">{{ $order->fulfillmentStatus->title }}</span>
                                        @elseif($order->fulfillment_status_id == 2)
                                        <span
                                            class="badge badge-light-primary">{{ $order->fulfillmentStatus->title }}</span>
                                        @elseif($order->fulfillment_status_id == 3)
                                        <span
                                            class="badge badge-light-warning">{{ $order->fulfillmentStatus->title }}</span>
                                        @elseif($order->fulfillment_status_id == 4)
                                        <span
                                            class="badge badge-light-info">{{ $order->fulfillmentStatus->title }}</span>
                                        @else
                                        <span
                                            class="badge badge-light-warning">{{ $order->fulfillmentStatus->title }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                    
                                    	  <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                        	<span class="svg-icon svg-icon-5 m-0">
                                        		<!--begin::Svg Icon | path: assets/media/icons/duotone/Code/Settings4.svg-->
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                         <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                        <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                                </svg></span>
                                                <!--end::Svg Icon-->
                                                
                                        	</span>
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-80px py-4" data-kt-menu="true">
                                            
                                            <div class="menu-item px-3">
                                            <button data-bs-toggle="modal" data-bs-target="#show_order_modal"
                                                    onclick="Livewire.emit('showOrder', {{ $order->id }})"
                                                    class="btn btn-light-warning btn-icon mb-2">
                                                    <i class="bi bi-eye-fill"></i>
                                            </button>
                                            </div>
                                            
                                            <div class="menu-item px-3">
                                            <button onclick="Livewire.emit('showSendOrder', {{ $order->id }})"
                                                data-bs-toggle="modal" data-bs-target="#send_order_modal"
                                                class="btn btn-light-danger btn-icon  mb-2"><i
                                                    class="bi bi-envelope-fill"></i>
                                            </button>
                                            </div>
                                            
                                            <div class="menu-item px-3">
                                            <button class="btn btn-light-primary btn-icon  mb-2" onclick="navigator.clipboard.writeText('{{ route('orders.invoices.show', $order->id) }}').then(toastr.success('URL copied to clipboard.'))">
                                            	<i class="bi bi-clipboard"></i>
                                            </button>
                                            </div>
                                            
                                            <div class="menu-item px-3">
                                                <div class="btn btn-light-success btn-icon  mb-2"
                                                    onclick="printJS('{{ route('orders.invoices.show', $order->id) }}')">
                                                    <i class="bi bi-printer-fill"></i></div>
                                            </div>
                                            
                                            <div class="menu-item px-3">
                                                <a href="{{ route('orders.invoices.show', $order->id) }}" target="_blank"
                                                    class="btn btn-light-warning btn-icon mb-2"><i
                                                        class="bi bi-cloud-download-fill"></i></a>
                                            </div>
                                            
                                            
                                        </div>
                                        <!--end::Menu-->
                                 
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="show_order_modal">
        <div class="modal-dialog modal-lg">
            <livewire:frontend.orders.show-order-modal />
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="send_order_modal">
        <div class="modal-dialog modal-md">
            <livewire:frontend.manager.dashboard.send-order />
        </div>
    </div>

    @push('styles')
    <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    @endpush
</x-content>
