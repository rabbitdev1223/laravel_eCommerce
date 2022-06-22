<div class="table-responsive">
    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer min-w-1000px min-w-lg-auto" id="kt_table_messages" role="grid">
        <!--begin::Table head-->
        <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0" role="row">
                <th class="min-w-125px" tabindex="0" aria-controls="kt_table_messages" aria-label="Name: activate to sort column ascending">Name</th>
                <th class="min-w-125px" tabindex="0" aria-controls="kt_table_messages" aria-label="Email: activate to sort column ascending">Email</th>
                <th class="min-w-125px" tabindex="0" aria-controls="kt_table_messages" aria-label="Subject: activate to sort column ascending">Subject</th>
                <th class="min-w-125px" tabindex="0" aria-controls="kt_table_messages" aria-label="Phone Number: activate to sort column ascending">Phone Number</th>
                <th class="min-w-125px" tabindex="0" aria-controls="kt_table_messages" aria-label="Messsage: activate to sort column ascending">Messsage</th>
                <th class="min-w-125px" tabindex="0" aria-controls="kt_table_messages" aria-label="Created Date: activate to sort column ascending">Created Date</th>
                <th class="text-center" tabindex="0" aria-controls="kt_table_messages" aria-label="Status: activate to sort column ascending">Status</th>
                <th class="min-w-125px text-center" aria-label="Actions">Actions</th>
            </tr>
            <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="text-gray-600 fw-bold">
            @foreach($messages as $key => $message)
            <tr data-key='{{ $message->id }}' class="{{ $key % 2 == 0 ? 'odd' : 'even'}}">
                <td>
                    <!--begin:: name -->
                    <div class="overflow-hidden text-nowrap text-truncate @if(!$message->is_read) text-dark fw-bolder @endif" style="width:130px;">
                        <span>{{ $message->name }}</span>
                    </div>
                    <!--end::name-->
                </td>
                <td>
                    <!--begin::email-->
                    <div class="overflow-hidden @if(!$message->is_read) text-dark fw-bolder @endif">
                        <span>{{ $message->email }}</span>
                    </div>
                    <!--end::email-->
                </td>
                <td>
                    <!--begin::subject-->
                    <div class="overflow-hidden text-nowrap text-truncate @if(!$message->is_read) text-dark fw-bolder @endif" style="width:140px;">
                        <span>{{ $message->subject }}</span>
                    </div>
                    <!--end::subject-->
                </td>
                <td>
                    <!--begin::phone_number-->
                    <div class="overflow-hidden @if(!$message->is_read) text-dark fw-bolder @endif">
                        <span>{{ $message->phone_number }}</span>
                    </div>
                    <!--end::phone_number-->
                </td>
                <td>
                    <!--begin::message-->
                    <div class="overflow-hidden text-nowrap text-truncate @if(!$message->is_read) text-dark fw-bolder @endif" style="width:160px;">
                        <span>{{ $message->message }}</span>
                    </div>
                    <!--end::message-->
                </td>
                <td>
                    <!--begin::created_at-->
                    <div class="overflow-hidden @if(!$message->is_read) text-dark fw-bolder @endif">
                        <span>{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</span>
                    </div>
                    <!--end::created_at-->
                </td>
                <td>
                    @if ($message->email_sent)
                    <span class="badge badge-light-success">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Double-check.svg-->
                        <span class="svg-icon svg-icon-3 svg-icon-success me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002)"></path>
                                    <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002)"></path>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Sent
                    </span>
                    @else
                    <span class="badge badge-light text-muted d-flex align-items-center justify-content-center">Not Yet</span>
                    @endif
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 py-4" style="width:fit-content;max-width:140px;" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="view_message menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_message">View</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a wire:click.prevent="markReadUnRead({{ $message->id }})" href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">Mark As @if(!$message->is_read)Read @else Unread @endif</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
                <!--end::Action=-->
            </tr>
            @endforeach
        </tbody>
        <!--end::Table body-->
    </table>
</div>
