@section('title', 'Dashboard')

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
                    <small class="my-1 text-muted fs-7 fw-bold ms-1"></small>
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
		<div id="kt_content_container" class="container">
			<!--begin::Row-->
			<div class="row gy-5 g-xl-8">
				<!--begin::Col-->
				<div class="col-xxl-4">
					<!--begin::Mixed Widget 2-->
					<div class="card card-xxl-stretch">
						<!--begin::Header-->
						<div class="card-header border-0 bg-danger py-5">
							<h3 class="card-title fw-bolder text-white">Welcome Back {{ Auth::user()->first_name }}</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body p-0">
							<!--begin::Chart-->
							<div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 150px"></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-p mt-n20 position-relative">
								<!--begin::Row-->
								<div class="row g-0">
									<!--begin::Col-->
									<div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
										<!--begin::Svg Icon | path: icons/duotone/Design/Layers.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
												<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<a href="{{ route('admin.orders.index') }}" class="text-warning fw-bold fs-6 mt-2">Item Orders</a>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
										<!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
										<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<button onclick="Livewire.emit('toggleUser', 0);"  class="btn btn-clear text-primary fw-bold fs-6 p-0" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">New Users</button>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								
							</div>
							<!--end::Stats-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 2-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xxl-4">
					<!--begin::List Widget 5-->
					<div class="card card-xxl-stretch">
						<!--begin::Header-->
						<div class="card-header align-items-center border-0 mt-4">
							<h3 class="card-title align-items-start flex-column">
								<span class="fw-bolder mb-2 text-dark">Transaction&nbsp;{{  Carbon\Carbon::today()->format('M') }},&nbsp;{{  Carbon\Carbon::today()->firstOfMonth()->format('d') }}&nbsp;at&nbsp;{{  Carbon\Carbon::today()->LastOfMonth()->format('d') }}&nbsp;-&nbsp;{{  Carbon\Carbon::today()->format('Y') }}</span>
								<span class="text-muted fw-bold fs-7">{{ count($transaction) }}&nbsp;Transactions</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-5">
							<!--begin::Timeline-->
							<div class="timeline-label">
								<style>
								    .timeline-label .timeline-label{
								        width: 80px;
								    }
								</style>
								@forelse($transaction as $t)
									<!--begin::Item-->
    								<div class="timeline-item">
    									<!--begin::Label-->
    									<div class="timeline-label fw-bolder text-gray-750 fs-8">{{ Carbon\Carbon::parse($t->created_at)->format('g:i A') }}</div>
    									<!--end::Label-->
    									<!--begin::Badge-->
    									<div class="timeline-badge">
    										<i class="fa fa-genderless {{ $t->paymentStatus->title == 'Paid' ? 'text-success' : ($t->paymentStatus->title == 'Authorized' ? 'text-warning' : 'text-danger')}} fs-1"></i>
    									</div>
    									<!--end::Badge-->
    									<!--begin::Text-->
    									<div class="fw-mormal timeline-content text-muted ps-3">#{{ $t->order_id }}&nbsp;-&nbsp;{{ $t->paymentStatus->title }}&nbsp;-&nbsp;{{ $t->formattedTotal() }}</div>
    									<!--end::Text-->
    								</div>
    								<!--end::Item-->
								@empty
									<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bolder text-gray-800 fs-6">{{ Carbon\Carbon::now()->format('g:i A') }}</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-warning fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Content-->
									<div class="timeline-content d-flex">
										<span class="fw-bolder text-gray-800 ps-3">Sorry, no transaction today</span>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Item-->
								@endforelse
							</div>
							<!--end::Timeline-->
						</div>
						<!--end: Card Body-->
					</div>
					<!--end: List Widget 5-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xxl-4">
					
					<div class="card card-xxl-stretch-10 mb-5 mb-xl-5">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column p-0">
							<!--begin::Stats-->
							<div class="flex-grow-1 card-p pb-0">
								<div class="d-flex flex-stack flex-wrap">
									<div class="me-2">
										<a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Total Orders</a>
										<div class="text-muted fs-7 fw-bold"></div>
									</div>
									<div class="fw-bolder fs-3 text-primary">{{ $total_orders }}</div>
								</div>
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="p-5 card-rounded-bottom" style="height: 80px">
								<a href='{{ route("admin.orders.index") }}' class='btn btn-sm btn-success'>
									<span class="svg-icon svg-icon-xl svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
												<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
												<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
												<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								View</a>
							</div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					
					
						<div class="card card-xxl-stretch-10 mb-5 mb-xl-5">
						<!--begin::Body-->
						<div class="card-body d-flex flex-column p-0">
							<!--begin::Stats-->
							<div class="flex-grow-1 card-p pb-0">
								<div class="d-flex flex-stack flex-wrap">
									<div class="me-2">
										<a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Total Users</a>
										<div class="text-muted fs-7 fw-bold"></div>
									</div>
									<div class="fw-bolder fs-3 text-primary">{{ $total_users_not_super }}</div>
								</div>
							</div>
							<!--end::Stats-->
							<!--begin::Chart-->
							<div class="p-5 card-rounded-bottom" style="height: 80px">
								<a href='{{ route("admin.users.index") }}' class='btn btn-sm btn-success'>
									<span class="svg-icon svg-icon-xl svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"></polygon>
												<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
												<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								View</a>
							</div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row gy-5 gx-xl-8">
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
                            <div class="shadow-xs card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1 bg-white" style="margin-top: -100px; min-height: 205px; ">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"></circle>
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
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Top Seller</a>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <path d="M9,17 L15,17 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,17 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,7 L9,7 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero"></path>
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
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Amount</a>
                                            <div class="text-gray-400 fw-bold fs-7">{{ $total_items_product }} Items</div>
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
                            <div class="shadow-xs card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1 bg-white" style="margin-top: -100px; min-height: 205px; ">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"></circle>
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
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Top Buyer</a>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <path d="M9,17 L15,17 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,17 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,7 L9,7 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero"></path>
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
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Amount</a>
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
                            <div class="shadow-xs card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1 bg-white" style="margin-top: -100px; min-height: 205px; ">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
                                        <span class="symbol-label bg-lighten">
                                            <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"></circle>
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
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Top Location Buyer</a>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <path d="M9,17 L15,17 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,17 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,7 L9,7 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z" fill="#000000" opacity="0.3"></path>
                                                    <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero"></path>
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
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Amount</a>
                                            <div class="text-gray-400 fw-bold fs-7">{{ $total_location }}&nbsp;Items</div>
                                        </div>
                                        <!--end::Title-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<!--end::Row-->
			
			<div class='row gy-5 g-xl-8' style="min-height: 500px;">
				 <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                <div class="card-header border-0 pt-5 justify-content-md-between justify-content-start">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Orders Statement</span>
                        {{-- <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>--}}
                    </h3>
                    <div class="card-toolbar">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">{{ $title1 }}</a>
                            </li>
                            
                             @if(count($table2) > 0)
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">{{ $title2 }}</a>
                            </li>
                            @endif
                             @if(count($table3) > 0)
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">{{ $title3 }}</a>
                            </li>
                            @endif
                             @if(count($table4) > 0)
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_4">{{ $title4 }}</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="card-body py-3">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th class="min-w-120px">User</th>
                                            <th class="min-w-80px">Date</th>
                                            <th class="min-w-140px">PO#</th>
                                            <th class="min-w-100px">Statuses</th>
                                            <th class="min-w-100px">Payment Statuses</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($table1 as $row)
                                        <tr>
                                            <td class="text-dark fw-bolder">{{ $row->user->first_name }}&nbsp;{{ $row->user->last_name }}</td>
                                            <td>{{ $row->created_at_difference() }}</td>
                                            <td>{{ $row->purchase_order_code }}</td>
                                            <td>{{ $row->orderStatus->title }}</td>
                                            <td class="{{ $row->paymentStatus->title == 'Paid' ? 'text-success' : ($row->paymentStatus->title == 'Authorized' ? 'text-warning' : 'text-danger')}}">{{ $row->paymentStatus->title }}</td>
                                            <td class="{{ $row->is_paid ? 'text-success' : 'text-danger' }} fw-bolder">{{ $row->formattedTotal() }}</td>
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
                                                    <button data-bs-toggle="modal" data-bs-target="#show_order_modal"
                                                            onclick="Livewire.emit('showOrder', {{ $row->id }})"
                                                            class="btn btn-light-warning btn-icon mb-2">
                                                            <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                    <button onclick="Livewire.emit('showSendOrder', {{ $row->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#send_order_modal"
                                                        class="btn btn-light-danger btn-icon  mb-2"><i
                                                            class="bi bi-envelope-fill"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                    <button class="btn btn-light-primary btn-icon  mb-2" onclick="navigator.clipboard.writeText('{{ route('orders.invoices.show', $row->id) }}').then(toastr.success('URL copied to clipboard.'))">
                                                    	<i class="bi bi-clipboard"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                        <div class="btn btn-light-success btn-icon  mb-2"
                                                            onclick="printJS('{{ route('orders.invoices.show', $row->id) }}')">
                                                            <i class="bi bi-printer-fill"></i></div>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('orders.invoices.show', $row->id) }}" target="_blank"
                                                            class="btn btn-light-warning btn-icon mb-2"><i
                                                                class="bi bi-cloud-download-fill"></i></a>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <!--end::Menu-->
                                                
                                            </td>
                                        </tr>

                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        @if(count($table2) > 0)
                        <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th class="min-w-120px">User</th>
                                            <th class="min-w-80px">Date</th>
                                            <th class="min-w-140px">PO#</th>
                                            <th class="min-w-100px">Statuses</th>
                                            <th class="min-w-100px">Payment Statuses</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($table2 as $row)
                                        <tr>
                                            <td class="text-dark fw-bolder">{{ $row->user->first_name }}&nbsp;{{ $row->user->last_name }}</td>
                                            <td>{{ $row->created_at_difference() }}</td>
                                            <td>{{ $row->purchase_order_code }}</td>
                                            <td>{{ $row->orderStatus->title }}</td>
                                            <td class="{{ $row->paymentStatus->title == 'Paid' ? 'text-success' : ($row->paymentStatus->title == 'Authorized' ? 'text-warning' : 'text-danger')}}">{{ $row->paymentStatus->title }}</td>
                                            <td class="{{ $row->is_paid ? 'text-success' : 'text-danger' }} fw-bolder">{{ $row->formattedTotal() }}</td>
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
                                                    <button data-bs-toggle="modal" data-bs-target="#show_order_modal"
                                                            onclick="Livewire.emit('showOrder', {{ $row->id }})"
                                                            class="btn btn-light-warning btn-icon mb-2">
                                                            <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                    <button onclick="Livewire.emit('showSendOrder', {{ $row->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#send_order_modal"
                                                        class="btn btn-light-danger btn-icon  mb-2"><i
                                                            class="bi bi-envelope-fill"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                    <button class="btn btn-light-primary btn-icon  mb-2" onclick="navigator.clipboard.writeText('{{ route('orders.invoices.show', $row->id) }}').then(toastr.success('URL copied to clipboard.'))">
                                                    	<i class="bi bi-clipboard"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                        <div class="btn btn-light-success btn-icon  mb-2"
                                                            onclick="printJS('{{ route('orders.invoices.show', $row->id) }}')">
                                                            <i class="bi bi-printer-fill"></i></div>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('orders.invoices.show', $row->id) }}" target="_blank"
                                                            class="btn btn-light-warning btn-icon mb-2"><i
                                                                class="bi bi-cloud-download-fill"></i></a>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                        
                        @if(count($table3) > 0)
                        <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th class="min-w-120px">User</th>
                                            <th class="min-w-80px">Date</th>
                                            <th class="min-w-140px">PO#</th>
                                            <th class="min-w-100px">Statuses</th>
                                            <th class="min-w-100px">Payment Statuses</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($table3 as $row)
                                        <tr>
                                            <td class="text-dark fw-bolder">{{ $row->user->first_name }}&nbsp;{{ $row->user->last_name }}</td>
                                            <td>{{ $row->created_at_difference() }}</td>
                                            <td>{{ $row->purchase_order_code }}</td>
                                            <td>{{ $row->orderStatus->title }}</td>
                                            <td class="{{ $row->paymentStatus->title == 'Paid' ? 'text-success' : ($row->paymentStatus->title == 'Authorized' ? 'text-warning' : 'text-danger')}}">{{ $row->paymentStatus->title }}</td>
                                            <td class="{{ $row->is_paid ? 'text-success' : 'text-danger' }} fw-bolder">{{ $row->formattedTotal() }}</td>
                                            <td class="text-center">
                                                <button type="button" onclick="Livewire.emit('showOrder', {{ $row->id }})" class=" btn btn-sm- btn-light-warning btn-icon" data-bs-toggle="modal" data-bs-target="#show_order_modal"><i class="bi bi-eye-fill"></i></button>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                        
                        @if(count($table4) > 0)
                        <div class="tab-pane fade" id="kt_table_widget_5_tab_4">
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 min-w-800px min-w-md-auto">
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th class="min-w-120px">User</th>
                                            <th class="min-w-80px">Date</th>
                                            <th class="min-w-140px">PO#</th>
                                            <th class="min-w-100px">Statuses</th>
                                            <th class="min-w-100px">Payment Statuses</th>
                                            <th class="min-w-100px">Amount</th>
                                            <th class="min-w-100px text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($table4 as $row)
                                        <tr>
                                            <td class="text-dark fw-bolder">{{ $row->user->first_name }}&nbsp;{{ $row->user->last_name }}</td>
                                            <td>{{ $row->created_at_difference() }}</td>
                                            <td>{{ $row->purchase_order_code }}</td>
                                            <td>{{ $row->orderStatus->title }}</td>
                                            <td class="{{ $row->paymentStatus->title == 'Paid' ? 'text-success' : ($row->paymentStatus->title == 'Authorized' ? 'text-warning' : 'text-danger')}}">{{ $row->paymentStatus->title }}</td>
                                            <td class="{{ $row->is_paid ? 'text-success' : 'text-danger' }} fw-bolder">{{ $row->formattedTotal() }}</td>
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
                                                    <button data-bs-toggle="modal" data-bs-target="#show_order_modal"
                                                            onclick="Livewire.emit('showOrder', {{ $row->id }})"
                                                            class="btn btn-light-warning btn-icon mb-2">
                                                            <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                    <button onclick="Livewire.emit('showSendOrder', {{ $row->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#send_order_modal"
                                                        class="btn btn-light-danger btn-icon  mb-2"><i
                                                            class="bi bi-envelope-fill"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                    <button class="btn btn-light-primary btn-icon  mb-2" onclick="navigator.clipboard.writeText('{{ route('orders.invoices.show', $row->id) }}').then(toastr.success('URL copied to clipboard.'))">
                                                    	<i class="bi bi-clipboard"></i>
                                                    </button>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                        <div class="btn btn-light-success btn-icon  mb-2"
                                                            onclick="printJS('{{ route('orders.invoices.show', $row->id) }}')">
                                                            <i class="bi bi-printer-fill"></i></div>
                                                    </div>
                                                    
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('orders.invoices.show', $row->id) }}" target="_blank"
                                                            class="btn btn-light-warning btn-icon mb-2"><i
                                                                class="bi bi-cloud-download-fill"></i></a>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                        
                    </div>
                </div>
            </div>
			</div>
		
		</div>
		<!--end::Container-->
    </div>

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
                    <div class="btn btn-icon btn-sm btn-active-icon-primary close_modal" data-kt-users-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                    <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
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
</x-admin-content>
