<x-content>
    <div id="kt_content_container" class="container">
        <div class="mt-6 row gy-0 mb-15 mt-md-20">
            <!--begin::Col-->
            <div class="col-md-6">
                <div class="card card-md-stretch me-md-5">
                    <div class="p-10 card-body p-lg-15">
                        @include('frontend.support.includes.faq')
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-15 mt-md-0">
                <div class="card card-md-stretch ms-md-5">
                    <div class="p-10 card-body p-lg-15">
                        @include('frontend.support.includes.contact')
                    </div>
                </div>
            </div>
        </div>

        <div class="row flex-column">
            <div class="col">
                <div class="mt-5 card">
                    <div class="card-body p-lg-15">
                        <div class="mb-5 row g-5 mb-lg-15">
                            <div class="col-sm-6 pe-lg-10">
                                <div
                                    class="p-10 text-center bg-light card-rounded d-flex flex-column justify-content-center h-lg-100">
                                    <span class="svg-icon svg-icon-3tx svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0)">
                                                <path opacity="0.25"
                                                    d="M21.3902 19.5804L19.4852 21.4853C19.4852 21.4853 14.5355 23.6066 7.46441 16.5356C0.39334 9.46451 2.51466 4.51476 2.51466 4.51476L4.41959 2.60983C5.28021 1.74921 6.70355 1.85036 7.43381 2.82404L9.25208 5.24841C9.84926 6.04465 9.77008 7.15884 9.06629 7.86262L7.46441 9.46451C7.46441 9.46451 7.46441 10.8787 10.2928 13.7071C13.1213 16.5356 14.5355 16.5356 14.5355 16.5356L16.1374 14.9337C16.8411 14.2299 17.9553 14.1507 18.7516 14.7479L21.1759 16.5662C22.1496 17.2964 22.2508 18.7198 21.3902 19.5804Z"
                                                    fill="#191213"></path>
                                                <path
                                                    d="M4.41959 2.60987L3.92887 3.10059L8.17151 8.75745L9.06629 7.86267C9.77007 7.15888 9.84926 6.0447 9.25208 5.24846L7.4338 2.82409C6.70354 1.85041 5.28021 1.74926 4.41959 2.60987Z"
                                                    fill="#121319"></path>
                                                <path
                                                    d="M21.3901 19.5804L20.8994 20.0711L15.2426 15.8285L16.1373 14.9337C16.8411 14.2299 17.9553 14.1507 18.7515 14.7479L21.1759 16.5662C22.1496 17.2965 22.2507 18.7198 21.3901 19.5804Z"
                                                    fill="#121319"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <h1 class="my-5 text-dark fw-bolder">Let’s Speak</h1>
                                    <a href="tel:405-759-3720" class="text-gray-700 fw-bold fs-2">1 (405) 759-3720</a>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-lg-10">
                                <div
                                    class="p-10 text-center bg-light card-rounded d-flex flex-column justify-content-center h-lg-100">
                                    <span class="svg-icon svg-icon-3tx svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25"
                                                d="M21 10C21 15.4917 16.1746 20.1791 13.5904 22.2957C12.6534 23.0631 11.3466 23.0631 10.4096 22.2957C7.82537 20.1791 3 15.4917 3 10C3 5.02944 7.02944 1 12 1C16.9706 1 21 5.02944 21 10Z"
                                                fill="#191213"></path>
                                            <path
                                                d="M15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6C13.6569 6 15 7.34315 15 9Z"
                                                fill="#121319"></path>
                                        </svg>
                                    </span>
                                    <h1 class="my-5 text-dark fw-bolder">Our Head Office</h1>
                                    <div class="text-gray-700 fs-3 fw-bold">6620 South I-35 Service Rd, Oklahoma City,
                                        OK 73149
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 text-center card bg-light">
                            <!--begin::Body-->
                            <div class="py-12 card-body">
                            
                                @if($facebook)
                                <a target="_blank" href="{{ $facebook }}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="my-2 h-30px" alt="">
                                </a>
                                @endif

                                @if($instagram)
                                <a target="_blank" href="{{ $instagram }}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/instagram-2016.svg') }}" class="my-2 h-30px" alt="">
                                </a>
                                @endif 
                                
                                @if($youtube)
                                <a target="_blank" href="{{ $youtube }}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/youtube-play.svg') }}" class="my-2 h-30px" alt="">
                                </a>
                                @endif
                               
                                @if($twitter)
                                <a target="_blank" href="{{ $twitter }}" class="mx-4">
                                    <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}" class="my-2 h-30px" alt="">
                                </a>
                                @endif
                            
                            </div>
                            <!--end::Body-->
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-content>
