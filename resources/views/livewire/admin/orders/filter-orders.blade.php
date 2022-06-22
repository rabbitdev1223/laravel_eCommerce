<div class="py-5 px-7">
    <!--begin::Input group-->
    <div class="mb-10">
        <!--begin::Input-->
        <div>
            <input wire:model.debounce.500ms='search' type="search" class="form-control form-control-solid"
                placeholder="PO#" autofocus>
        </div>
        <!--end::Input-->
    </div>
    {{-- <!--begin::Input group-->
    <div class="mb-10">
        <!--begin::Label-->
        <label class="form-label fw-bold">Status:</label>
        <!--end::Label-->
        <!--begin::Input-->
        <div>
            <select class="form-select form-select-solid" data-kt-select2="true"
                data-placeholder="Select option" data-allow-clear="true">
                <option></option>
                <option value="1">Approved</option>
                <option value="2">Pending</option>
                <option value="2">In Process</option>
                <option value="2">Rejected</option>
            </select>
        </div>
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="mb-10">
        <!--begin::Label-->
        <label class="form-label fw-bold">Member Type:</label>
        <!--end::Label-->
        <!--begin::Options-->
        <div class="d-flex">
            <!--begin::Options-->
            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                <input class="form-check-input" type="checkbox" value="1" />
                <span class="form-check-label">Author</span>
            </label>
            <!--end::Options-->
            <!--begin::Options-->
            <label class="form-check form-check-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                <span class="form-check-label">Customer</span>
            </label>
            <!--end::Options-->
        </div>
        <!--end::Options-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="mb-10">
        <!--begin::Label-->
        <label class="form-label fw-bold">Notifications:</label>
        <!--end::Label-->
        <!--begin::Switch-->
        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" value="" name="notifications"
                checked="checked" />
            <label class="form-check-label">Enabled</label>
        </div>
        <!--end::Switch-->
    </div>
    <!--end::Input group--> --}}
    <!--begin::Actions-->
    <div class="d-flex justify-content-end">
        <button type="reset" class="btn btn-sm btn-white btn-active-light-primary me-2"
            data-kt-menu-dismiss="true">Reset</button>
        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
    </div>
    <!--end::Actions-->
</div>
