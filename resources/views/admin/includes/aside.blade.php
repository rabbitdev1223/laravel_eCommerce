<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    @include('admin.includes.aside.brand')
    <!--end::Brand-->
    <!--begin::Aside menu-->
    @include('admin.includes.aside.aside')
    <!--end::Aside menu-->
    <!--begin::Footer-->
    {{-- @include('admin.includes.aside.footer') --}}
    <!--end::Footer-->
</div>
