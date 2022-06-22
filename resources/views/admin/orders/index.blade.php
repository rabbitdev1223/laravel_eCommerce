@section('title', 'Orders')

<x-admin-content>
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend"
                data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="flex-wrap mb-5 page-title d-flex align-items-center me-3 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="my-1 d-flex align-items-center text-dark fw-bolder fs-3">@yield('title')
                    <!--begin::Separator-->
                    <span class="mx-2 border-gray-200 h-20px border-start ms-3"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    {{-- <small class="my-1 text-muted fs-7 fw-bold ms-1">#XRS-45670</small> --}}
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="py-1 d-flex align-items-center">
                <!--begin::Wrapper-->
                <div>
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                        <!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="py-5 px-7">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="border-gray-200 separator"></div>
                        <!--end::Menu separator-->
                        <livewire:admin.orders.filter-orders />
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                {{-- <!--begin::Button-->
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"
                    id="kt_toolbar_primary_button">Create</a>
                <!--end::Button--> --}}
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container" id="kt_content_container">
            <livewire:admin.orders.list-orders />
        </div>
    </div>
    <!--end::Post-->
    <div class="modal fade" tabindex="-1" id="show_order_modal">
        <div class="modal-dialog modal-lg">
            <livewire:admin.orders.show-order-modal />
        </div>
    </div>
    
    <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
		<!--begin::Modal body-->
    		@livewire("address.form")
        <!--end::Modal body-->
    </div>

</x-admin-content>
