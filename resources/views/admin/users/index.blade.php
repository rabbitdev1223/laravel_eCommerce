@section('title', 'Users Management')

<x-admin-content>
    <style>
        .sorting:hover {
            cursor: pointer;
        }
    </style>
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
                    <!--                      <small class="my-1 text-muted fs-7 fw-bold ms-1">#XRS-45670</small>  -->
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container">
            <div class='row'>
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <livewire:admin.users.search :page="$users->currentPage()" :search="$search"
                                    :column="$column" :is_asc="$is_asc" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                                <!--begin::Add user-->
                                <button onclick="Livewire.emit('toggleUser', 0);" type="button"
                                    class="btn btn-light-primary btnNewUser" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_user">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                                            <rect fill="#000000" opacity="0.5"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)"
                                                x="4" y="11" width="16" height="2" rx="1"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add User
                                </button>


                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-user-table-toolbar="selected">
                                <div class="fw-bolder me-5">
                                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-user-table-select="delete_selected">Delete Selected</button>
                            </div>
                            <!--end::Group actions-->

                            <!--begin::Modal - Add task-->
                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bolder" id='title_modal'></h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div data-modal='#kt_modal_add_user'
                                                class="btn btn-icon btn-sm btn-active-icon-primary close_modal"
                                                data-kt-users-modal-action="close">
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                            fill="#000000">
                                                            <rect fill="#000000" x="0" y="7" width="16" height="2"
                                                                rx="1"></rect>
                                                            <rect fill="#000000" opacity="0.5"
                                                                transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                x="0" y="7" width="16" height="2" rx="1"></rect>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        @livewire("admin.users.form")
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - Add task-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table
                                    class="table align-middle table-row-dashed table-hover fs-6 gy-5 dataTable no-footer min-w-1000px min-w-lg-auto"
                                    id="kt_table_users" role="grid">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                            role="row">
                                            <th class="sorting @if($column == 'user') @if($is_asc == 'ASC') SORT_ASC @else SORT_DESC @endif @endif"
                                                data-column='user' tabindex="0" rowspan="1" colspan="1"
                                                aria-label="User" style="width: 250px;">@if($column == 'user')
                                                @if($is_asc == 'ASC') {!! $icon_asc !!} @else {!! $icon_desc !!} @endif
                                                @endif User</th>

                                            <th class="sorting @if($column == 'role') @if($is_asc == 'ASC') SORT_ASC @else SORT_DESC @endif @endif"
                                                data-column='role' tabindex="0" rowspan="1" colspan="1"
                                                aria-label="Role" style="width: 100px;">@if($column == 'role')
                                                @if($is_asc == 'ASC') {!! $icon_asc !!} @else {!! $icon_desc !!} @endif
                                                @endif Role</th>

                                            <th class="sorting @if($column == 'job') @if($is_asc == 'ASC') SORT_ASC @else SORT_DESC @endif @endif"
                                                data-column='job' tabindex="0" rowspan="1" colspan="1" aria-label="Job"
                                                style="width: 150px;">@if($column == 'job') @if($is_asc == 'ASC') {!!
                                                $icon_asc !!} @else {!! $icon_desc !!} @endif @endif Job</th>

                                            <th class="sorting @if($column == 'department') @if($is_asc == 'ASC') SORT_ASC @else SORT_DESC @endif @endif"
                                                data-column='department' tabindex="0" rowspan="1" colspan="1"
                                                aria-label="Department" style="width: 150px;">@if($column ==
                                                'department') @if($is_asc == 'ASC') {!! $icon_asc !!} @else {!!
                                                $icon_desc !!} @endif @endif Department</th>

                                            <th class="sorting @if($column == 'last_login') @if($is_asc == 'ASC') SORT_ASC @else SORT_DESC @endif @endif"
                                                data-column='last_login' tabindex="0" rowspan="1" colspan="1"
                                                aria-label="Last login" style="width: 150px;">@if($column ==
                                                'last_login') @if($is_asc == 'ASC') {!!$icon_asc !!} @else {!!
                                                $icon_desc !!} @endif @endif Last login</th>

                                            <th class="sorting @if($column == 'created_date') @if($is_asc == 'ASC') SORT_ASC @else SORT_DESC @endif @endif"
                                                data-column='created_date' tabindex="0" rowspan="1" colspan="1"
                                                aria-label="Created Date" style="width: 150px;">@if($column ==
                                                'created_date') @if($is_asc == 'ASC') {!! $icon_asc !!} @else {!!
                                                $icon_desc !!} @endif @endif Created Date</th>

                                            <th class="text-center  min-w-100px" rowspan="1" colspan="1"
                                                aria-label="Actions" style="width: 100px;">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-bold">

                                        @foreach($users as $key => $user)
                                        @php
                                        $link_delete= "#";
                                        $link_chat= "#";
                                        @endphp
                                        <tr data-key='{{ $user->id }}' class="{{ $key % 2 == 0 ? 'odd' : 'even'}}">

                                            <!--begin::User=-->
                                            <td class="d-flex align-items-center">
                                                <!--begin:: Avatar -->
                                                <div class="symbol symbol-50px overflow-hidden me-3">
                                                    <a class='edit_user' href="#">
                                                        <div class="symbol-label">
                                                            @if($user->image_id != null)
                                                            <img alt="{{ $user->first_name }}&nbsp;{{ $user->last_name }}"
                                                                src="{{ route('images', ['type' => 'avatars', 'size' => 150, 'image_id' => $user->image_id]) }}">
                                                            @else
                                                            <img src="{{ asset('assets/media/avatars/blank.png') }}"
                                                                alt="{{ $user->first_name }}&nbsp;{{ $user->last_name }}"
                                                                class="w-100">
                                                            @endif
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::User details-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                        class="edit_user text-gray-800 text-hover-primary mb-1">{{ $user->first_name }}&nbsp;{{ $user->middle_name }}&nbsp;{{ $user->last_name }}</a>
                                                    <span>{{ $user->email }}</span>
                                                </div>
                                                <!--begin::User details-->
                                            </td>
                                            <!--end::User=-->
                                            <!--begin::Role=-->
                                            <td>{{ count($user->getRoleNames()) == 0 ? 'User' : $user->getRoleNames()[0] }}
                                            </td>
                                            <!--end::Role=-->


                                            <!--begin::Job=-->
                                            <td>{{ $user->job ? $user->job->title : '' }}</td>
                                            <!--end::Job=-->

                                            <!--begin::department=-->
                                            <td>{{ $user->department ? $user->department->title : ''}}</td>
                                            <!--end::department=-->


                                            <!--begin::Last login=-->
                                            <td data-order="2021-07-10T02:09:13+07:00">
                                                <div class="badge badge-light fw-bolder">
                                                    @if($user->last_login){{ \Carbon\Carbon::parse($user->last_login)->diffForHumans() }}
                                                    @endif</div>
                                            </td>
                                            <!--end::Last login=-->

                                            <!--begin::Joined-->
                                            <td data-order="2021-03-10T20:43:00+07:00">
                                                {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                            <!--begin::Joined-->
                                            <!--begin::Action=-->
                                            <td class="text-center">
                                                <a href="#" class="btn  btn-icon btn-light btn-active-light-primary "
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-flip="top-end">
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                        <!--begin::Svg Icon | path: assets/media/icons/duotone/Code/Settings4.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <path
                                                                    d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path
                                                                    d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000" />
                                                            </svg></span>
                                                        <!--end::Svg Icon-->

                                                    </span>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-80px py-4"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <a href="#"
                                                            class="edit_user btn btn-light-warning btn-icon mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_customer">
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.25" x="3" y="21" width="18"
                                                                        height="2" rx="1" fill="#191213" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M4.08576 11.5L3.58579 12C3.21071 12.375 3 12.8838 3 13.4142V17C3 18.1045 3.89543 19 5 19H8.58579C9.11622 19 9.62493 18.7893 10 18.4142L10.5 17.9142L4.08576 11.5Z"
                                                                        fill="#121319" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M5.5 10.0858L11.5858 4L18 10.4142L11.9142 16.5L5.5 10.0858Z"
                                                                        fill="#121319" />
                                                                    <path opacity="0.25" fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M18.1214 1.70705C16.9498 0.535476 15.0503 0.535476 13.8787 1.70705L13 2.58576L19.4142 8.99997L20.2929 8.12126C21.4645 6.94969 21.4645 5.0502 20.2929 3.87862L18.1214 1.70705Z"
                                                                        fill="#191213" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>

                                                    <div class="menu-item px-3">
                                                        <button title="Send E-Mail reset Password" type='button'
                                                            onclick="window.livewire.emit('resetPassword', {{$user->id}});"
                                                            class="btn btn-light-success btn-icon mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_update_customer">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Mail-locked.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon--></span>
                                                        </button>
                                                    </div>

                                                    @if(Auth::user()->hasRole('super'))
                                                    <div class="menu-item px-3">
                                                        <button type="button"
                                                            class="btn btn-light-danger btn-icon mb-2 btn_remove"
                                                            data-kt-users-table-filter="delete_row">
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                        <path
                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>

                                                    <div class="menu-item px-3">
                                                        <a href='{{ route("admin.users.profile.edit", $user->id) }}'
                                                            class="btn btn-light-primary btn-icon mb-2">
                                                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Shield-user.svg--><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon--></span>
                                                        </a>
                                                    </div>

                                                    @endif
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
                            <div class="row">
                                <!--                                 <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div> -->
                                <div
                                    class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers" id="kt_table_users_paginate">
                                        <ul class="pagination">

                                            <li class="paginate_button page-item previous @if($users->currentPage() == 1) disabled @endif"
                                                id="kt_table_users_previous">
                                                <a href="@if($users->currentPage() != 1) {{ $url }}?page=1&column={{ $column }}&order={{ $is_asc }}{{ $search != '' ? "&search={$search}" : ""}} @else # @endif"
                                                    aria-controls="kt_table_users" data-dt-idx="0" tabindex="0"
                                                    class="page-link"><i class="previous"></i></a>
                                            </li>

                                            @foreach($elements_links as $element)
                                            @if(is_array($element))
                                            @foreach($element as $k => $page_link)
                                            <li
                                                class="paginate_button page-item @if($k == $users->currentPage()) active @endif">
                                                <a href="{{ $page_link }}&column={{ $column }}&order={{ $is_asc }}{{ $search != '' ? "&search={$search}" : ""}}"
                                                    aria-controls="kt_table_users" data-dt-idx="{{$k}}"
                                                    tabindex="{{$k}}" class="page-link">{{ $k }}</a>
                                            </li>
                                            @endforeach
                                            @else
                                            <li class="paginate_button page-item">
                                                <a href="#" aria-controls="kt_table_users"
                                                    class="page-link">{{ $element }}</a>
                                            </li>
                                            @endif
                                            @endforeach


                                            <li class="paginate_button page-item next @if($users->currentPage() == $users->lastPage()) disabled @endif"
                                                id="kt_table_users_next">
                                                <a href="@if($users->currentPage() != $users->lastPage()) {{ $url }}?page={{$users->lastPage()}}&column={{ $column }}&order={{ $is_asc }}{{ $search != '' ? "&search={$search}" : ""}} @else # @endif"
                                                    aria-controls="kt_table_users" data-dt-idx="4" tabindex="0"
                                                    class="page-link"><i class="next"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        var asc = "{!! $icon_asc !!}";
			var desc = "{!! $icon_desc !!}";
			$(function(){
				$(".sorting").on('click',function(){
					var column = $(this).attr('data-column');
					var is_asc = 'DESC';

					if($('.desc_icon').is('*'))
						$('.desc_icon').remove();

					if($('.asc_icon').is('*'))
						$('.asc_icon').remove();

					if($(this).hasClass('SORT_ASC')){
						$(this).html(desc+' '+$(this).attr('aria-label'));
						$(this).addClass('SORT_DESC');
						$(this).removeClass('SORT_ASC');
						is_asc = 'DESC';

					}else if($(this).hasClass('SORT_DESC')){
						$(this).html(asc+' '+$(this).attr('aria-label'));
						$(this).addClass('SORT_ASC');
						$(this).removeClass('SORT_DESC');
						is_asc = 'ASC';

					}else{
						$('.sorting').removeClass('SORT_ASC');
						$('.sorting').removeClass('SORT_DESC');

						$(this).html(asc+' '+$(this).attr('aria-label'));
						$(this).addClass('SORT_ASC');
						is_asc = 'ASC';
					}

					window.livewire.emit('columnSorteBy',column,is_asc);
				});
			});
    </script>
    @endpush

</x-admin-content>
