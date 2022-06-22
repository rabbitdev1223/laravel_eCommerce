<div wire:ignore class="me-4">
    <!--begin::Menu-->
    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
        <!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->Filter
    </a>
    <!--begin::Menu 1-->
    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px pt-2" data-kt-menu="true">
        <!--begin::Form-->
        <div class="px-7 py-5">
            <!--begin::Input group-->
            <div class="mb-8">
                <!--begin::Label-->
                <label class="form-label fw-bolder">Product Name:</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <input wire:model="productName" type="text" class="form-control form-control-solid" placeholder="Product Name" name="">
                </div>
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-8">
                <!--begin::Label-->
                <label class="form-label fw-bolder">Manufacturer:</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select wire:model="manufacturerId" id="manufacturerId" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select a manufacturer" data-allow-clear="true" data-hide-search="false">
                        <option></option>
                        @foreach ($manufacturers as $manufacturer)
                        <option value="{{$manufacturer->id}}">{{$manufacturer->title}}</option>
                        @endforeach
                    </select>
                </div>
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <div class="mb-8">
                <label class="fs-6 form-label fw-bolder text-dark">Min. Price</label>
                <!--begin::Dialer-->
                <div class="position-relative">
                    <!--begin::Decrease control-->
                    <button wire:click="changePrice('decrease-min')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                        <!--begin::Svg Icon | path: icons/duotone/Code/Minus.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                <rect fill="#000000" x="6" y="11" width="12" height="2" rx="1"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Decrease control-->
                    <!--begin::Input control-->
                    <input wire:model="minPrice" type="number" class="form-control form-control-solid border-0 ps-12" placeholder="Min Price">
                    <!--end::Input control-->
                    <!--begin::Increase control-->
                    <button wire:click="changePrice('increase-min')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                        <!--begin::Svg Icon | path: icons/duotone/Code/Plus.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Increase control-->
                </div>
                <!--end::Dialer-->
            </div>
            <div class="mb-8">
                <label class="fs-6 form-label fw-bolder text-dark">Max. Price</label>
                <!--begin::Dialer-->
                <div id="kt_dialer_max_price" class="position-relative">
                    <!--begin::Decrease control-->
                    <button wire:click="changePrice('decrease-max')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                        <!--begin::Svg Icon | path: icons/duotone/Code/Minus.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                <rect fill="#000000" x="6" y="11" width="12" height="2" rx="1"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Decrease control-->
                    <!--begin::Input control-->
                    <input wire:model="maxPrice" type="number" class="form-control form-control-solid border-0 ps-12" placeholder="Max Price">
                    <!--end::Input control-->
                    <!--begin::Increase control-->
                    <button wire:click="changePrice('increase-max')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                        <!--begin::Svg Icon | path: icons/duotone/Code/Plus.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--end::Increase control-->
                </div>
                <!--end::Dialer-->
            </div>
            <!--begin::Input group-->
            <div class="mb-8">
                <!--begin::Label-->
                <label class="form-label fw-bolder">Internal Number:</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <input wire:model="internalNumber" type="text" class="form-control form-control-solid" placeholder="Internal Number" name="">
                </div>
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="d-flex justify-content-end">
                <button wire:click="resetFields" type="reset" class="btn btn-sm btn-white btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                <button wire:click="applyFilter" type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Form-->
    </div>
    <!--end::Menu 1-->
    <!--end::Menu-->
    <style>
        /* Chrome, Safari, Edge, Opera */
        #kt_dialer_min_price>input::-webkit-outer-spin-button,
        #kt_dialer_min_price>input::-webkit-inner-spin-button,
        #kt_dialer_max_price>input::-webkit-outer-spin-button,
        #kt_dialer_max_price>input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    @push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#manufacturerId').on('change', function(e) {
                    var data = $('#manufacturerId').select2("val");
                    @this.set('manufacturerId', data);
                }
            );
        });
    </script>
    @endpush
</div>
