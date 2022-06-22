@extends('layouts.base')

@section('content')
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative bg-light">
        <!--begin::Wrapper-->
        <div class="top-0 bottom-0 d-flex flex-column position-xl-fixed w-xl-600px scroll-y">
            <!--begin::Content-->
            <div class="p-10 text-center d-flex flex-row-fluid flex-column pt-lg-20">
                <!--begin::Logo-->
                <a href="{{ route('home') }}" class="py-9">
                    <img alt="Logo" src="{{ route('images', ['size' => 70, 'type' => 'logo']) }}" class="h-70px" />
                </a>
                <!--end::Logo-->
                <!--begin::Title-->
                <h1 class="pb-5 fw-bolder fs-2qx pb-md-10">Welcome to Evans Enterprises</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="fw-bold fs-2">Discover Amazing Products
                    <br />with great safety features</p>
                <!--end::Description-->
            </div>
            <!--end::Content-->
            <!--begin::Illustration-->
            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                style="background-image: url({{ asset('assets/media/illustrations/checkout.png') }})"></div>
            <!--end::Illustration-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Aside-->
    <!--begin::Body-->
    <div class="py-10 d-flex flex-column flex-lg-row-fluid">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="p-10 mx-auto w-lg-500px p-lg-15">
                {{ $slot }}
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="flex-wrap p-5 pb-0 d-flex flex-center fs-6">
            <!--begin::Links-->
            <div class="d-flex flex-center fw-bold fs-6">
                <a href="https://accuratesafetyco.com" class="px-2 text-muted text-hover-primary"
                    target="_blank">Accurate Safety Compliance</a>
                <a href="{{ route('support') }}" class="px-2 text-muted text-hover-primary" target="_blank">Support</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Body-->
</div>
<!--end::Authentication - Sign-in-->
@endsection
