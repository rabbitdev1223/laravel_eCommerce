<x-content>
    <div class="container mt-md-20 mt-6">
        <div>

            <livewire:frontend.manager.dashboard :dates="['initial_dt' => $initial_dt, 'final_dt' => $final_dt]" />

            <div class='row'>
                <div class="col-md-4 col-sm-5">
                    <!--begin::List Widget 1-->
                    <div class="card card-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Header-->
                            <div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack">
                                    <h3 class="m-0 text-white fw-bolder fs-3">Sales Summary - Product</h3>
                                    <div class="ms-1">
                                        <!--begin::Menu-->
                                        {{-- <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-primary border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button> --}}
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Specify a target name for future usage and reference"
                                                        aria-label="Specify a target name for future usage and reference"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>

                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Balance-->
                                <div class="d-flex text-center flex-column text-white pt-8">
                                    <span class="fw-bold fs-7">Total {{ $diffInDays }} Days</span>
                                    <span class="fw-bolder fs-2x pt-1">{{ $total_week_product }}</span>
                                </div>
                                <!--end::Balance-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Items-->
                            <div class="shadow-xs card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1 bg-white"
                                style="margin-top: -100px; min-height: 205px; ">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6">
                                                        </circle>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Top
                                                Seller</a>
                                            <div class="text-gray-400 fw-bold fs-7">{{ $product_best_sale }}</div>
                                        </div>
                                        <!--end::Title-->


                                    </div>
                                    <!--end::Description-->
                                </div>

                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Devices/Watch2.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <path
                                                        d="M9,17 L15,17 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,17 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,7 L9,7 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#"
                                                class="fs-5 text-gray-800 text-hover-primary fw-bolder">Amount</a>
                                            <div class="text-gray-400 fw-bold fs-7">{{ $total_items_product }} Items
                                            </div>
                                        </div>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 1-->
                </div>

                <div class="col-md-4 col-sm-5">
                    <!--begin::List Widget 1-->
                    <div class="card card-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Header-->
                            <div class="px-9 pt-7 card-rounded h-275px w-100 bg-danger">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack">
                                    <h3 class="m-0 text-white fw-bolder fs-3">Sales Summary - Users</h3>
                                    <div class="ms-1">
                                        <!--begin::Menu-->
                                        {{-- <button type="button"
                                            class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-danger border-0 me-n3"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-flip="top-end">
                                            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000">
                                                        </rect>
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                            opacity="0.3"></rect>
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                            opacity="0.3"></rect>
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                            opacity="0.3"></rect>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button> --}}
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Specify a target name for future usage and reference"
                                                        aria-label="Specify a target name for future usage and reference"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->

                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Balance-->
                                <div class="d-flex text-center flex-column text-white pt-8">
                                    <span class="fw-bold fs-7">Total {{ $diffInDays }} Days</span>
                                    <span class="fw-bolder fs-2x pt-1">{{ $total_week_user }}</span>
                                </div>
                                <!--end::Balance-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Items-->
                            <div class="shadow-xs card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1 bg-white"
                                style="margin-top: -100px; min-height: 205px; ">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6">
                                                        </circle>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Top
                                                Buyer</a>
                                            <div class="text-gray-400 fw-bold fs-7">{{ $best_user }}</div>
                                        </div>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Description-->
                                </div>

                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Devices/Watch2.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <path
                                                        d="M9,17 L15,17 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,17 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,7 L9,7 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#"
                                                class="fs-5 text-gray-800 text-hover-primary fw-bolder">Amount</a>
                                            <div class="text-gray-400 fw-bold fs-7">{{ $total_users }}&nbsp;Items</div>
                                        </div>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 1-->
                </div>

                <div class="col-md-4 col-sm-5">
                    <!--begin::List Widget 1-->
                    <div class="card card-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Header-->
                            <div class="px-9 pt-7 card-rounded h-275px w-100 bg-success">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack">
                                    <h3 class="m-0 text-white fw-bolder fs-3">Sales Summary - Location</h3>
                                    <div class="ms-1">
                                        <!--begin::Menu-->
                                        {{-- <button type="button"
                                            class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-success border-0 me-n3"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-flip="top-end">
                                            <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000">
                                                        </rect>
                                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                            opacity="0.3"></rect>
                                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                            opacity="0.3"></rect>
                                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                            opacity="0.3"></rect>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button> --}}
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments</div>
                                            </div>

                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="Specify a target name for future usage and reference"
                                                        aria-label="Specify a target name for future usage and reference"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->

                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Balance-->
                                <div class="d-flex text-center flex-column text-white pt-8">
                                    <span class="fw-bold fs-7">Total {{ $diffInDays }} Days</span>
                                    <span class="fw-bolder fs-2x pt-1">{{ $total_week_location }}</span>
                                </div>
                                <!--end::Balance-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Items-->
                            <div class="shadow-xs card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1 bg-white"
                                style="margin-top: -100px; min-height: 205px; ">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6">
                                                        </circle>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Top
                                                Location Buyer</a>
                                            <div class="text-gray-400 fw-bold fs-7">{{ $best_location }}</div>
                                        </div>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Description-->
                                </div>

                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Devices/Watch2.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <path
                                                        d="M9,17 L15,17 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,17 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,7 L9,7 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                    <path
                                                        d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#"
                                                class="fs-5 text-gray-800 text-hover-primary fw-bolder">Amount</a>
                                            <div class="text-gray-400 fw-bold fs-7">{{ $total_location }}&nbsp;Items
                                            </div>
                                        </div>
                                        <!--end::Title-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- starting tables  --}}


            <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                <div class="card-header border-0 pt-5 justify-content-md-between justify-content-start">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Orders</span>
                        {{-- <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>--}}
                    </h3>
                    {{-- <div class="card-toolbar">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1"
                                    data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">{{ $title1 }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1"
                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">{{ $title2 }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4"
                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">{{ $title3 }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4"
                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_4">{{ $title4 }}</a>
                    </li>
                    </ul>
                </div> --}}
            </div>

            <div class="card-body py-3">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                        <div class="table-responsive">
                            <table
                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="min-w-120px">User</th>
                                        <th class="min-w-80px">Created</th>
                                        <th class="min-w-140px">PO#</th>
                                        <th class="min-w-100px">Status</th>
                                        <th class="min-w-100px">Payment Status</th>
                                        <th class="min-w-100px">Amount</th>
                                        <th class="min-w-100px text-center">Actions</th>
                                    </tr>
                                </thead>
                                <livewire:frontend.manager.orders-table :orders="$table1" />
                            </table>
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                            <div class="table-responsive">
                                <table
                                    class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th class="min-w-120px">User</th>
                                            <th class="min-w-80px">Date</th>
                                            <th class="min-w-140px">Order ID</th>
                                            <th class="min-w-100px">Statuses</th>
                                            <th class="min-w-100px">Payment Statuses</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px text-center">Sales Order</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($table2 as $row)
                                        <tr>
                                            <td class="text-dark fw-bolder">
                                                {{ $row->user->first_name }}&nbsp;{{ $row->user->last_name }}</td>
                    <td>{{ $row->created_at_difference() }}</td>
                    <td>{{ $row->purchase_order_code }}</td>
                    <td>{{ $row->orderStatus->title }}</td>
                    <td
                        class="{{ $row->paymentStatus->title == 'Paid' ? 'text-success' : ($row->paymentStatus->title == 'Authorized' ? 'text-warning' : 'text-danger')}}">
                        {{ $row->paymentStatus->title }}</td>
                    <td class="{{ $row->is_paid ? 'text-success' : 'text-danger' }} fw-bolder">
                        {{ $row->formattedTotal() }}</td>
                    <td class="text-center">
                        <button type="button" onclick="Livewire.emit('showOrder', {{ $row->id }})"
                            class=" btn btn-sm- btn-light-warning" data-bs-toggle="modal"
                            data-bs-target="#show_order_modal">View</button>
                    </td>
                    </tr>

                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                <div class="table-responsive">
                    <table
                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th class="min-w-120px">User</th>
                                <th class="min-w-80px">Date</th>
                                <th class="min-w-140px">Order ID</th>
                                <th class="min-w-100px">Statuses</th>
                                <th class="min-w-100px">Payment Statuses</th>
                                <th class="min-w-100px">Amount</th>
                                <th class="min-w-100px text-center">Sales Order</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($table3 as $row)
                            <tr>
                                <td class="text-dark fw-bolder">
                                    {{ $row->user->first_name }}&nbsp;{{ $row->user->last_name }}</td>
                                <td>{{ $row->created_at_difference() }}</td>
                                <td>{{ $row->purchase_order_code }}</td>
                                <td>{{ $row->orderStatus->title }}</td>
                                <td
                                    class="{{ $row->paymentStatus->title == 'Paid' ? 'text-success' : ($row->paymentStatus->title == 'Authorized' ? 'text-warning' : 'text-danger')}}">
                                    {{ $row->paymentStatus->title }}</td>
                                <td class="{{ $row->is_paid ? 'text-success' : 'text-danger' }} fw-bolder">
                                    {{ $row->formattedTotal() }}</td>
                                <td class="text-center">
                                    <button type="button" onclick="Livewire.emit('showOrder', {{ $row->id }})"
                                        class=" btn btn-sm- btn-light-warning" data-bs-toggle="modal"
                                        data-bs-target="#show_order_modal">View</button>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_table_widget_5_tab_4">
                <div class="table-responsive">
                    <table
                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th class="min-w-120px">User</th>
                                <th class="min-w-80px">Date</th>
                                <th class="min-w-140px">Order ID</th>
                                <th class="min-w-100px">Statuses</th>
                                <th class="min-w-100px">Payment Statuses</th>
                                <th class="min-w-100px">Amount</th>
                                <th class="min-w-100px text-center">Sales Order</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($table4 as $row)
                            <tr>
                                <td class="text-dark fw-bolder">
                                    {{ $row->user->first_name }}&nbsp;{{ $row->user->last_name }}</td>
                                <td>{{ $row->created_at_difference() }}</td>
                                <td>{{ $row->purchase_order_code }}</td>
                                <td>{{ $row->orderStatus->title }}</td>
                                <td
                                    class="{{ $row->paymentStatus->title == 'Paid' ? 'text-success' : ($row->paymentStatus->title == 'Authorized' ? 'text-warning' : 'text-danger')}}">
                                    {{ $row->paymentStatus->title }}</td>
                                <td class="{{ $row->is_paid ? 'text-success' : 'text-danger' }} fw-bolder">
                                    {{ $row->formattedTotal() }}</td>
                                <td class="text-center">
                                    <button type="button" onclick="Livewire.emit('showOrder', {{ $row->id }})"
                                        class=" btn btn-flush text-muted fw-bolder text-hover-primary fs-6"
                                        data-bs-toggle="modal" data-bs-target="#show_order_modal">View</button>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>

    </div>
    </div>

    {{-- employee management --}}
    @include('frontend.manager.includes.employee-management')


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

    </div>
    </div>

    @push('styles')
    <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    @endpush
</x-content>
