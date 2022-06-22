<!--begin::Topbar-->
<div class="flex-shrink-0 d-flex align-items-stretch">
    <!--begin::Toolbar wrapper-->
    <div class="flex-shrink-0 d-flex align-items-stretch">

        @auth
        @if (request()->routeIs('home'))
        <!--begin::Search-->
        @include('frontend.includes.topbar.search')
        <!--end::Search-->
        @else
        @include('frontend.includes.topbar.search2')
        @endif
        <!--begin::Notifications-->
        @include('frontend.includes.topbar.notification')
        <!--end::Notifications-->
        <!--begin::User-->
        @include('frontend.includes.topbar.user')
        <!--end::User -->
        @endauth

        @guest
        <div class="d-flex align-items-center ms-1 ms-lg-3">
            <a href="{{ route('login') }}" class="link-primary fs-6 fw-bolder">Login
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                    <path fill-rule="evenodd"
                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg></a>
        </div>
        @endguest

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
    <!--end::Toolbar wrapper-->
</div>
<!--end::Topbar-->
