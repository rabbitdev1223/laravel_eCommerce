@section('title', 'User Profile')

<x-admin-content>
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="flex-wrap mb-5 page-title d-flex align-items-center me-3 mb-lg-0 lh-1">
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
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
    
    	<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
    		<!--begin::Modal body-->
        		@livewire("address.form")
            <!--end::Modal body-->
    	</div>
    	
    	<div class="modal fade" id="kt_modal_new_phone" tabindex="-1" aria-hidden="true">
    		<!--begin::Modal body-->
        		@livewire("phone.form")
            <!--end::Modal body-->
    	</div>
    	
        <div id="kt_content_container" class="container">
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            	@if($user->image_id)
                                	<img src="{{ route('images', ['type' => 'avatars', 'size' => 160, 'image_id' => $user->image_id]) }}" alt="{{ $user->first_name }} {{ $user->last_name }}" />
                            	@else
                            		<img src="{{ asset('assets/media/avatars/blank.png') }}" />
                                @endif
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">{{ $user->first_name }}&nbsp;{{ $user->last_name }}</a>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                        
                                        @if(count($user->addresses) > 0)
                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotone/Map/Marker1.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            {{ $user->addresses->first()->city->title }}, {{ $user->addresses->first()->city->state->code }}
                                        </a>
                                        @endif
                                        
                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <!--begin::Svg Icon | path: icons/duotone/Communication/Mail-at.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<path d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z" fill="#000000" />
																</svg>
															</span>
                                            <!--end::Svg Icon-->{{ $user->email }}</a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Actions-->
                                <div class="d-flex my-4">
<!--                                     <a class="btn btn-sm btn-primary me-2" id="kt_user_follow_button" data-bs-toggle="tab" href="#kt_profile_details"> -->
                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Double-check.svg-->
<!--                                         <span class="svg-icon svg-icon-3 d-none"> -->
<!--                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> -->
<!--                                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> -->
<!--                                                     <polygon points="0 0 24 0 24 24 0 24" /> -->
<!--                                                     <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002)" /> -->
<!--                                                     <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002)" /> -->
<!--                                                 </g> -->
<!--                                             </svg> -->
<!--                                         </span> -->
                                        <!--end::Svg Icon-->
                                        <!--begin::Indicator-->
<!--                                         <span class="indicator-label">Save</span> -->
                                        
                                        <!--end::Indicator-->
                                    </a>
                                    @if(Auth::user()->hasRole('super'))
                                    	<a href="#" class="btn btn-sm btn-danger me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Delete</a>
                                    @endif
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                       
                                       {{--
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-up.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
																				<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																	</span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Spend This Month</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                      
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-down.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                            <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Quantity Stuff</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                       
                                        
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-up.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                            <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Cancel Order Rate</div>
                                        </div>
                                        
                                         --}}
                                    </div>
                                </div>
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <div class="d-flex overflow-auto h-55px">
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                            
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6 active" data-bs-toggle="tab" href="#kt_profile_details_view">Overview</a>
                            </li>
                            <!--end::Nav item-->
                            
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" data-bs-toggle="tab" href="#kt_profile_details">Profile</a>
                            </li>
                            <!--end::Nav item-->
                            
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" data-bs-toggle="tab" href="#kt_profile_security">Log</a>
                            </li>
                            <!--end::Nav item-->
                           
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" data-bs-toggle="tab" href="#kt_profile_billing">Billing Address</a>
                            </li>
                            <!--end::Nav item-->
                            
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" data-bs-toggle="tab" href="#kt_profile_contact">Contact</a>
                            </li>
                            <!--end::Nav item-->
                           
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6" data-bs-toggle="tab" href="#kt_profile_statements">Purchase</a>
                            </li>
                            <!--end::Nav item-->
                             
                        </ul>
                    </div>
                    <!--begin::Navs-->
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_profile_details_view" role="tabpanel">
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bolder m-0">Profile Details</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                        
                        <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-dark">{{ $user->first_name }}&nbsp;{{ $user->middle_name }}&nbsp;{{ $user->last_name }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Job</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold fs-6">{{ $user->job ? $user->job->title : 'N/A' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Department</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-bold fs-6">{{ $user->department ? $user->department->title : 'N/A' }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">E-Mail
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="E-Mail must be active"></i></label>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <span class="fw-bolder fs-6 me-2">{{ $user->email}}</span>
                                    @if($user->email_verified_at) <span class="badge badge-success">Verified</span> @else <span class="badge badge-danger">Not verified</span>  @endif
                                </div>
                                <!--end::Col-->
                            </div>
                            
                            @php $address = $user->addresses->where('is_primary', true)->first(); @endphp
                            @if($address)
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Primary Address
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ $address->type }}"></i></label>
                                <div class="col-lg-8">
                                    <a href='https://www.google.com/maps/place/{{ $address->address }},&nbsp;{{ $address->city->title }}&nbsp;-&nbsp;{{ $address->city->state->code }}, {{ $address->zipcode }}' target="_blank" class="fw-bolder fs-6 text-dark">{{ $address->address }},&nbsp;{{ $address->city->title }}&nbsp;-&nbsp;{{ $address->city->state->code }}, {{ $address->zipcode }}</a>
                                </div>
                            </div>
                            @endif
                            
                            @php $phone = $user->phones->where('is_primary', true)->first(); @endphp
                            
                            @if($phone)
                              <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Primary Phone
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ $phone->type }}"></i></label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-dark">{{ $phone->number }}</span>
                                </div>
                            </div>
                            @endif
                            
                            <div class="row mb-10">
                                <label class="col-lg-4 fw-bold text-muted">Role</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6">{{ $role }}</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_profile_details" role="tabpanel">
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bolder m-0">Profile Details Edit</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" action="{{ route('admin.users.profile.update', $user) }}"  class="form" method="post" enctype="multipart/form-data">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                	<span>
                                		@csrf
                                	</span>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                      
                                            <div class="image-input image-input-outline @if(!$user->image_id) image-input-empty @endif" data-kt-image-input="true" style="background-image: url({{ asset('assets/media/avatars/blank.png') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style=" @if($user->image_id) background-image: url({{ route('images', ['type' => 'avatars', 'size' => 160, 'image_id' => $user->image_id]) }}) @else background-image: none;  @endif"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-4 fv-row">
                                                    <input required="required" type="text" name="first_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{ $user->first_name}}" />
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-4 fv-row">
                                                    <input type="text" name="middle_name" class="form-control form-control-lg form-control-solid" placeholder="Middle name" value="{{ $user->middle_name }}" />
                                                </div>
                                                 <div class="col-lg-4 fv-row">
                                                    <input required="required" type="text" name="last_name" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="{{ $user->last_name }}" />
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Job</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="job_id" aria-label="Select a Job" data-control="select2" data-placeholder="Select a Job..." class="form-select form-select-solid form-select-lg fw-bold">
                                            	<option value=''>...</option>
                                            	@foreach($jobs as $job)
                                            		<option {{ $user->job_id = $job->id ? 'selected="selected"' : '' }} value='{{ $job->id }}'>{{ $job->title }}</option>
                                            	@endforeach
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    
                                    
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Location</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="location_id" aria-label="Select a Location" data-control="select2" data-placeholder="Select a Location..." class="form-select form-select-solid form-select-lg fw-bold">
                                            	<option value=''>...</option>
                                            	@foreach($locations as $location)
                                            		 <option {{ $user->location_id = $location->id ? 'selected="selected"' : '' }} value="{{ $location->id }}" >{{ $location->city->title }},&nbsp;{{ $location->city->state->code }}</option>
                                            	@endforeach
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">E-Mail</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="E-Mail must be Verified"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input required="required" type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="E-Mail" value="{{ $user->email }}" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    
                                          <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Contact Phone</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                              
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <!--begin::Options-->
                                            <div class="d-flex align-items-center mt-3">
                                                <!--begin::Option-->
                                               
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    <input {{ $user->communication == 'email' ? 'checked="checked"' : '' }} class="form-check-input" name="communication" type="radio" value="email" />
                                                    <span class="fw-bold ps-2 fs-6">Email</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-inline form-check-solid">
                                                    <input {{ $user->communication == 'phone' ? 'checked="checked"' : '' }} class="form-check-input" name="communication" type="radio" value="phone" />
                                                    <span class="fw-bold ps-2 fs-6">Phone</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6"><span class="required">Role</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="access level"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <!--begin::Options-->
                                            <div class="d-flex align-items-center mt-3">
                                               
                                               @foreach($roles as $r)
                                                    <!--begin::Option-->
                                                    <label class="form-check form-check-inline form-check-solid me-5">
                                                        <input @if($user->hasRole($r->name)) checked="checked" @endif class="form-check-input" id='user_role_{{ $r->id }}' name="user_role" type="radio" value="{{ $r->id }}" />
                                                        <span class="fw-bold ps-2 fs-6">{{ $r->name }}</span>
                                                    </label>
                                                    <!--end::Option-->
                                                @endforeach
                                                
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    
                                    <!--begin::Input group-->
                                    <div class="row mb-0">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        	<span>Allow ?</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allow user to login"></i>
                                        </label>
                                        <!--begin::Label-->
                                        <!--begin::Label-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <div class="form-check form-check-solid form-switch fv-row">
                                                <input value="1" class="form-check-input w-45px h-30px" type="checkbox" name="is_active" @if($user->is_active) checked="checked" @endif />
                                                <label class="form-check-label" for="allowmarketing"></label>
                                            </div>
                                        </div>
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_profile_security" role="tabpanel">
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Heading-->
                            <div class="card-title">
                                <h3>Login Sessions</h3>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Toolbar-->
                   
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-0">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                    <!--begin::Thead-->
                                    <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                    <tr>
                                        <th class="min-w-100px">IP Address</th>
                                        <th class="min-w-100px">Status</th>
                                        <th class="min-w-250px">Device</th>
                                        <th class="min-w-100px">Time</th>
                                    </tr>
                                    </thead>
                                    <!--end::Thead-->
                                    <!--begin::Tbody-->
                                    <tbody class="fw-6 fw-bold text-gray-600">
                                    	@foreach($user->logs()->orderBy('created_at','DESC')->limit(25)->get() as $log)
                                            <tr>
                                                <td>{{ $log->ip }}</td>
                                                <td>	
                                                    <span class="badge badge-light-{{ $log->type == 'login' ? 'success' : 'danger' }} fs-7 fw-bolder">{{ $log->type }}</span>
                                                </td>
                                                <td>{{ $log->device }}</td>
                                                <td>{{ \Carbon\Carbon::parse($log->created_at)->diffForHumans() }}</td>
                                            </tr>
                                   		@endforeach
                                    </tbody>
                                    <!--end::Tbody-->
                                </table>
                                <!--end::Table-->
                                @if(count($user->logs) <= 0)
                                	<div class="alert alert-secondary text-center" role="alert">No Log History Found</div>
                                @endif
                                
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_profile_billing" role="tabpanel">
                
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Title-->
                            <div class="card-title">
                                <h3>Address</h3>
                            </div>
                            <!--end::Title-->
                            <div class='card-toolbar m-0'>
                            	<button onclick="Livewire.emit('toggleAddress', 0, {{ $user->id }});"   type="button" class="btn btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address" >New Address</button>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Addresses-->
                            <div class="row gx-9 gy-6">
                            	
                            	@forelse($user->addresses as $a)	
                                    <!--begin::Col-->
                                    <div class="col-xl-6">
                                        <!--begin::Address-->
                                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-column py-2">
                                                <div class="d-flex align-items-center fs-5 fw-bolder mb-5">{{ $a->type }}
                                                    @if($a->is_primary) <span class="badge badge-light-success fs-7 ms-2">Primary</span> @endif </div>
                                                <div class="fs-6 fw-bold text-gray-600">{{ $a->address }}
                                                    <br />{{ $a->city->title }} {{ $a->city->state->code }} {{ $a->zipcode }}
                                                    <br />US</div>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Actions-->
                                            <div class="d-flex align-items-center py-2">
                                            	@if(Auth::user()->hasRole('super'))
                                                	<button data-key="{{ $a->id }}" data-user="{{ $user->id }}" type="button" class="btn btn-sm btn-light-danger me-3 remove_address">Delete</button>
                                                @endif
                                                <button onclick="Livewire.emit('toggleAddress', {{ $a->id }},{{ $user->id }});" class="btn btn-sm btn-light-primary view_address" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Edit</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Address-->
                                    </div>
                                    <!--end::Col-->
                            	@empty
                                    <div class="alert alert-secondary text-center" role="alert">No Addresses Found</div>
                                @endforelse
                            
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
				</div>

				<div class="tab-pane fade" id='kt_profile_contact' role="tabpanel">
					<div class="card mb-5 mb-xl-10">
						<!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Title-->
                            <div class="card-title">
                                <h3 class="m-0">Contact Number</h3>
                            </div>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar m-0">
                            	<button onclick="Livewire.emit('togglePhone', 0, {{ $user->id }});"   type="button" class="btn btn-light-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_phone" >New Contact</button>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card header-->
                         <!--begin::Card body-->
                        	<div class="card-body tab-content">
                           		<!--begin::Addresses-->
                                <div class="row gx-9 gy-6">
                                	
                                	@forelse($user->phones as $p)	
                                        <!--begin::Col-->
                                        <div class="col-xl-6">
                                            <!--begin::Address-->
                                            <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                                <!--begin::Details-->
                                                <div class="d-flex flex-column py-2">
                                                    <div class="d-flex align-items-center fs-5 fw-bolder mb-5">{{ $p->type }}
                                                        @if($p->is_primary) <span class="badge badge-light-success fs-7 ms-2">Primary</span> @endif </div>
                                                    <div class="fs-6 fw-bold text-gray-600">{{ $p->number }}</div>
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Actions-->
                                                <div class="d-flex align-items-center py-2">
                                                	@if(Auth::user()->hasRole('super'))
                                                    	<button data-key="{{ $p->id }}" data-user="{{ $user->id }}" type="button" class="btn btn-sm btn-light-danger me-3 remove_phone">Delete</button>
                                                    @endif
                                                    <button onclick="Livewire.emit('togglePhone', {{ $p->id }},{{ $user->id }});" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_phone">Edit</button>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Address-->
                                        </div>
                                        <!--end::Col-->
                                    @empty
                                    	<div class="alert alert-secondary text-center" role="alert">No Contact Number Found</div>
                                	@endforelse
                                	
                                </div>
                        	</div>
                            <!--end::Card body-->
					</div>
				</div>

                <div class="tab-pane fade" id="kt_profile_statements" role="tabpanel">
                    <div class="card">
                        <!--begin::Header-->
                        <div class="card-header card-header-stretch">
                            <!--begin::Title-->
                            <div class="card-title">
                                <h3 class="m-0 text-gray-800">Statement</h3>
                            </div>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar m-0">
                                <!--begin::Tab nav-->
                                <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs border-transparent" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_referrals_year_tab" class="nav-link text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">All Orders</a>
                                    </li>
                                </ul>
                                <!--end::Tab nav-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Tab Content-->
                        <div id="kt_referred_users_tab_content" class="tab-content">
                            <!--begin::Tab panel-->
                            <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                        <!--begin::Thead-->
                                        <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                        <tr>
                                            <th class="min-w-100px ps-9">PO#</th>
                                            <th class="min-w-100px px-0">Date</th>
                                            <th class="min-w-250px">Location</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-100px">Status Payment</th>
                                            <th class="min-w-100px text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        @php
                                        	$orders_temp = $user->orders()->orderBy('created_at','DESC')->get();
                                        @endphp
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                        @foreach($orders_temp as $order)
                                        <tr>
                                            <td class="ps-9">
                                            	<span style="cursor: pointer;" class='text-dark fw-bolder text-hover-primary fs-6'data-bs-toggle="modal" data-bs-target="#show_order_modal" onclick="Livewire.emit('showOrder', {{ $order->id }})" >{{ $order->purchase_order_code}}</span>
                                        	</td>
                                            <td>{{ \Carbon\Carbon::parse($order->created_at)->diffForHumans() }}</td>
                                            <td data-key='{{ $order->id }}' data-action="{{ route('admin.orders.updateAddress', $order) }}">
                                            	<span class="view_address text-dark fw-bolder text-hover-primary fs-6" style="max-width: 200px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; cursor: pointer;">{{ $order->address_type }}</span>
                                                <span class="text-muted fw-bold text-muted d-block fs-7" style="max-width: 200px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $order->address }}&nbsp;{{ $order->address2 }}</span>
                                                <span class="text-muted fw-bold text-muted d-block fs-7" style="max-width: 200px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $order->city->title }}&nbsp;-&nbsp;{{ $order->city->state->code }}&nbsp;{{ $order->zipcode }}</span>
                                            </td>
                                            <td class="text-success">{{ $order->formattedTotal() }}</td>
                                            <td class="text-{{ $order->orderStatus->title == 'Open' ? 'warning' : 'danger' }}">{{ $order->orderStatus->title }}</td>
                                            
                                            @php
                                            	$paymentStatus = '';
                                            	switch($order->paymentStatus->title){
                                            		case 'Authorized':
                                            			$paymentStatus = 'success';
                                            			break;
                                        			case 'Paid':
                                            			$paymentStatus = 'success';
                                            			break;
                                        			case 'Pending':
                                            			$paymentStatus = 'warning';
                                            			break;
                                        			case 'Partially paid':
                                            			$paymentStatus = 'primary';
                                        				break;
                                            		default:
                                            			$paymentStatus = 'danger';
                                            			break;
                                            	}
                                            	
                                            @endphp
                                            
                                            <td class="text-{{ $paymentStatus }}">{{ $order->paymentStatus->title }}</td>
                                            <td class="text-center">
                                
                                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            	<span class="svg-icon svg-icon-5 m-0">
                                            		<!--begin::Svg Icon | path: assets/media/icons/duotone/Code/Settings4.svg-->
                                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                             <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                                    </svg></span>
                                                    <!--end::Svg Icon-->
                                                    
                                            	</span>
                                            </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-80px py-4" data-kt-menu="true">
                                                
                                                <div class="menu-item px-3">
                                                <button data-bs-toggle="modal" data-bs-target="#show_order_modal" onclick="Livewire.emit('showOrder', {{ $order->id }})"
                                                        class="btn btn-light-warning btn-icon mb-2">
                                                        <i class="bi bi-eye-fill"></i>
                                                </button>
                                                </div>
                                                
                                                <div class="menu-item px-3">
                                                <button onclick="Livewire.emit('showSendOrder', {{ $order->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#send_order_modal"
                                                    class="btn btn-light-danger btn-icon  mb-2"><i
                                                        class="bi bi-envelope-fill"></i>
                                                </button>
                                                </div>
                                                
                                                <div class="menu-item px-3">
                                                <button class="btn btn-light-primary btn-icon  mb-2" onclick="navigator.clipboard.writeText('{{ route('orders.invoices.show', $order->id) }}').then(toastr.success('URL copied to clipboard.'))">
                                                	<i class="bi bi-clipboard"></i>
                                                </button>
                                                </div>
                                                
                                                <div class="menu-item px-3">
                                                    <div class="btn btn-light-success btn-icon  mb-2"
                                                        onclick="printJS('{{ route('orders.invoices.show', $order->id) }}')">
                                                        <i class="bi bi-printer-fill"></i></div>
                                                </div>
                                                
                                                <div class="menu-item px-3">
                                                    <a href="{{ route('orders.invoices.show', $order->id) }}" target="_blank"
                                                        class="btn btn-light-warning btn-icon mb-2"><i
                                                            class="bi bi-cloud-download-fill"></i></a>
                                                </div>
                                                
                                                
                                            </div>
                                            <!--end::Menu-->
                                            
                                        </tr>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Tab panel-->
                           
                           	@if(count($orders_temp) <= 0)
                                <div class="alert alert-secondary text-center" role="alert">No Purchase History Found</div>
                            @endif
                           
                        </div>
                        <!--end::Tab Content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <div class="modal fade" tabindex="-1" id="send_order_modal">
        <div class="modal-dialog modal-md">
            <livewire:frontend.manager.dashboard.send-order />
        </div>
    </div>
    
    <div class="modal fade" tabindex="-1" id="show_order_modal">
        <div class="modal-dialog modal-lg">
            <livewire:frontend.orders.show-order-modal />
        </div>
	</div>

		@push('scripts')
        <script type="text/javascript">
            		$(function(){
            			                    	
            			$("[name='phone']").on('blur',function(){
            				var str = $(this).val();
            				
            				
            				  var cleaned = ('' + str).replace(/\D/g, '');
            				  var match = cleaned.match(/^(1|)?(\d{3})(\d{3})(\d{4})$/);
            				  
            				  if (match) {
            				    var intlCode = (match[1] ? '+1 ' : '');
            				    var number_formated = intlCode+'('+match[2]+')'+ match[3]+'-'+match[4];
            				    
            				    $(this).val(number_formated);
            				    
            				  }else{
            					  $(this).val('');
            				  }
            				  
            				  
            			});

            			$('.view_address').on('click', function(){
            				var action = $(this).parent('td').attr('data-action');
            				var id = $(this).parent('td').attr('data-key');
            							
            				Livewire.emit('formOrder', action, id);
            				
            				setTimeout(function(){
            					$('#kt_modal_new_address').modal('show');  
            	    	  }, 500);
            				
            	    	});
            		});
				</script>
				@endpush

</x-admin-content>
