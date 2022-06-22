<div class="flex-shrink-0 d-flex align-items-stretch">
    <!--begin::Search-->
    {{-- @include('admin.includes.header.topbar.search') --}}
    <!--end::Search-->

    <!--begin::Chat-->
    @include('admin.includes.header.topbar.chat')
    <!--end::Chat-->
    <!--begin::Notifications-->
    {{-- @include('admin.includes.header.topbar.notifications') --}}
    <!--end::Notifications-->
    <!--begin::User-->
    {{-- @include('admin.includes.header.topbar.user') --}}
    @include('frontend.includes.topbar.user')
    <!--end::User -->
    <!--begin::Heaeder menu toggle-->
    <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
        <div class="btn btn-icon btn-active-light-primary" id="kt_header_menu_mobile_toggle">
            <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
            <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z"
                            fill="black" />
                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z"
                            fill="black" />
                    </g>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
    </div>
    <!--end::Heaeder menu toggle-->
</div>
