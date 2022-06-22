@extends('layouts.base')

@section('content')
<!--begin::Page-->
<div class="flex-row page d-flex flex-column-fluid">
    <!--begin::Wrapper-->
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" style="" class="header align-items-stretch">
            <!--begin::Container-->
            <div class="container d-flex align-items-stretch justify-content-between">
                <!--begin::Aside mobile toggle-->
                <!--end::Aside mobile toggle-->
                <!--begin::Logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                    <a href="{{ route('home') }}">
                        {{-- <img alt="Logo" src="{{ route('images', ['size' => 35, 'type' => 'logo']) }}"
                        class="h-35px" /> --}}
                        <img alt="Logo" src="{{ asset('assets/media/logos/Evans-Logo.jfif') }}" class="h-35px" />
                    </a>
                </div>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                    @include('frontend.includes.navbar')
                    @include('frontend.includes.topbar')
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        {{ $slot }}
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="py-4 footer d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="order-2 text-dark order-md-1">
                    <span class="text-muted fw-bold me-1">{{ date('Y') }}©</span>
                    <a href="https://accuratesafetyco.com" target="_blank"
                        class="text-gray-800 text-hover-primary">Accurate Safety Compliance</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="order-1 menu menu-gray-600 menu-hover-primary fw-bold">
                    <li class="menu-item">
                        <a href="{{ route('support') }}" target="_blank" class="px-2 menu-link">Support</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Page-->

@push('scripts')
<script>
    window.addEventListener('test', event => {
            document.querySelector('[myAttribute]').click();
        });
</script>
@endpush
@endsection
