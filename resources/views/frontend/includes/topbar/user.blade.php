<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <livewire:frontend.top.user.avatar />
    <!--begin::Menu-->
    <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->

        <div class="px-3 menu-item">
            <div class="px-3 menu-content d-flex align-items-center">
                <livewire:frontend.top.user.upload-avatar />

                <a href="#">
                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                        <div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->first_name }}
                            {{ auth()->user()->last_name }}
                            {{-- <span class="px-2 py-1 badge badge-light-success fw-bolder fs-8 ms-2">Pro</span> --}}
                        </div>
                        <span
                            class="fw-bold text-muted text-hover-primary fs-7">{{ Illuminate\Support\Str::of(auth()->user()->email)->limit(20) }}</span>
                    </div>
                    <!--end::Username-->
                </a>
            </div>
        </div>
        <div class="my-2 separator"></div>
        @if(Auth::user()->hasRole('user'))
        {{-- <div class="my-2 separator"></div> --}}
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="px-5 menu-item">
            <a href="{{ route('orders.index') }}"
                class="px-5 menu-link {{ request()->routeIs('orders') ? 'active' : '' }}">My Orders</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        {{-- <div class="px-5 menu-item">
                <a href="pages/projects/list.html" class="px-5 menu-link">
                    <span class="menu-text">My Projects</span>
                    <span class="menu-badge">
                        <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                    </span>
                </a>
            </div> --}}
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="px-5 menu-item">
            <a href="{{ route('favorites') }}"
                class="px-5 menu-link {{ request()->routeIs('favorites') ? 'active' : '' }}">My Favorites</a>
        </div>
        <!--end::Menu item-->

        @elseif(Auth::user()->hasRole('manager'))

        <div class="px-5 menu-item">
            <a href="{{ route('dashboard') }}"
                class="px-5 menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
        </div>

        @elseif(Auth::user()->hasRole('admin'))


        @elseif(Auth::user()->hasRole('super'))
        <div class="px-5 menu-item">
            <a href="{{ route('admin.dashboard') }}"
                class="px-5 menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Admin Dashboard</a>
        </div>
        @endif

        <div class="px-5 menu-item">
            <a href="{{ route('my-account') }}"
                class="px-5 menu-link {{ request()->routeIs('my-account') ? 'active' : '' }}">My Account</a>
        </div>
        <div class="my-2 separator"></div>

        <div class="px-5 menu-item">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" class="px-5 menu-link"
                    onclick="event.preventDefault(); this.closest('form').submit();">Sign Out</a>
            </form>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div>
