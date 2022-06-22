<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
        <img src="{{ asset('assets/media/avatars/150-2.jpg') }}" alt="metronic" />
    </div>
    <!--begin::Menu-->
    <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="px-3 menu-item">
            <div class="px-3 menu-content d-flex align-items-center">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="{{ asset('assets/media/avatars/150-2.jpg') }}" />
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                        <span class="px-2 py-1 badge badge-light-success fw-bolder fs-8 ms-2">Pro</span>
                    </div>
                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="my-2 separator"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="px-5 menu-item">
            <a href="account/overview.html" class="px-5 menu-link">My Profile</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="px-5 menu-item">
            <a href="pages/projects/list.html" class="px-5 menu-link">
                <span class="menu-text">My Projects</span>
                <span class="menu-badge">
                    <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                </span>
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="px-5 menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start"
            data-kt-menu-flip="bottom">
            <a href="#" class="px-5 menu-link">
                <span class="menu-title">My Subscription</span>
                <span class="menu-arrow"></span>
            </a>
            <!--begin::Menu sub-->
            <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/referrals.html" class="px-5 menu-link">Referrals</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/billing.html" class="px-5 menu-link">Billing</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/statements.html" class="px-5 menu-link">Payments</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/statements.html" class="px-5 menu-link d-flex flex-stack">Statements
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="View your statements"></i></a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="my-2 separator"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <div class="px-3 menu-content">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
                                name="notifications" />
                            <span class="form-check-label text-muted fs-7">Notifications</span>
                        </label>
                    </div>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="px-5 menu-item">
            <a href="account/statements.html" class="px-5 menu-link">My Statements</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="my-2 separator"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="px-5 menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start"
            data-kt-menu-flip="bottom">
            <a href="#" class="px-5 menu-link">
                <span class="menu-title position-relative">Language
                    <span
                        class="px-3 py-2 rounded fs-8 bg-light position-absolute translate-middle-y top-50 end-0">English
                        <img class="w-15px h-15px rounded-1 ms-2"
                            src="{{ asset('assets/media/flags/united-states.svg') }}" alt="metronic" /></span></span>
            </a>
            <!--begin::Menu sub-->
            <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/settings.html" class="px-5 menu-link d-flex active">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}"
                                alt="metronic" />
                        </span>English</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/settings.html" class="px-5 menu-link d-flex">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="{{ asset('assets/media/flags/spain.svg') }}" alt="metronic" />
                        </span>Spanish</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/settings.html" class="px-5 menu-link d-flex">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="{{ asset('assets/media/flags/germany.svg') }}" alt="metronic" />
                        </span>German</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/settings.html" class="px-5 menu-link d-flex">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="{{ asset('assets/media/flags/japan.svg') }}" alt="metronic" />
                        </span>Japanese</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="px-3 menu-item">
                    <a href="account/settings.html" class="px-5 menu-link d-flex">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="{{ asset('assets/media/flags/france.svg') }}" alt="metronic" />
                        </span>French</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="px-5 my-1 menu-item">
            <a href="account/settings.html" class="px-5 menu-link">Account Settings</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="px-5 menu-item">
            <a href="authentication/flows/basic/sign-in.html" class="px-5 menu-link">Sign
                Out</a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div>
