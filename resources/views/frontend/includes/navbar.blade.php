<!--begin::Navbar-->
<div class="d-flex align-items-stretch" id="kt_header_nav">
    <!--begin::Menu wrapper-->
    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-place="true" data-kt-place-mode="prepend"
        data-kt-place-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
        <!--begin::Menu-->
        <div class="my-5 menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-lg-0 align-items-stretch"
            id="#kt_header_menu" data-kt-menu="true">
            @auth
            {{-- menu item --}}
            <div
                class="menu-item me-lg-1 {{ request()->routeIs('home') || request()->routeIs('products.show') ? 'here' : '' }}">
                <a class="py-3 menu-link" href="{{ route('home') }}">
                    <span class="menu-title">Store</span>
                </a>
            </div>
            {{-- end menu item --}}
            @endauth


            {{-- menu item --}}
            <div class="menu-item me-lg-1 {{ request()->routeIs('support') ? 'here' : '' }}">
                <a class="py-3 menu-link" href="{{ route('support') }}">
                    <span class="menu-title">Support</span>
                </a>
            </div>
            {{-- end menu item --}}
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Navbar-->
