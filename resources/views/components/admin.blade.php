@extends('layouts.aside')

@section('content')
<!--begin::Page-->
<div class="flex-row page d-flex flex-column-fluid">
    <!--begin::Aside-->
    @include('admin.includes.aside')
    <!--end::Aside-->
    <!--begin::Wrapper-->
    <div class="wrapper d-flex flex-column flex-row-fluid min-vh-100 pb-16" id="kt_wrapper">
        <!--begin::Header-->
        @include('admin.includes.header')
        <!--end::Header-->
        <!--begin::Content-->
        {{ $slot }}
        <!--end::Content-->
        <!--begin::Footer-->
        @include('admin.includes.footer')
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Page-->
@endsection
