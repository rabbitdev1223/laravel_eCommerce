@section('title', 'FAQs Management')

<x-admin-content>
    <style>
        .faq-item,
        .faq-item .fv-plugins-icon-container {
            position: relative;
        }
        .faq-item .fv-plugins-icon-container .btn-icon {
            position: absolute;
            top: -15px;
            right: -15px;
        }
        .faq-item .icon-drag {
            position: absolute;
            top: 6px;
            left: -43px;
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
                <h1 class="my-1 d-flex align-items-center text-dark fw-bolder fs-3">@yield('title')</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="py-1 d-flex align-items-center">
                <!--begin::Wrapper-->
                <div>
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                        <!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z"
                                        fill="#000000" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="py-5 px-7">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="border-gray-200 separator"></div>
                        <!--end::Menu separator-->
                        {{-- <livewire:admin.orders.filter-orders /> --}}
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                {{-- <!--begin::Button-->
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"
                    id="kt_toolbar_primary_button">Create</a>
                <!--end::Button--> --}}
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>

    <div id="kt_post" class="post d-flex flex-column-fluid">
        <div class="container">
            <div class="card mb-5 mb-xxl-8">
                <div class="card-body">
                    <div class="faq-item border-bottom-1 border-bottom-dashed border-gray-300 mb-6 pb-6">
                        <span class="btn btn-icon icon-drag btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Drag Order">
                            <i class="bi bi-list fs-2"></i>
                        </span>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label required fw-bold fs-6">Question</label>
                                <div class="fv-row fv-plugins-icon-container">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Question">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <label class="col-form-label required fw-bold fs-6">Answer</label>
                                <div class="fv-row fv-plugins-icon-container">
                                    <textarea class="form-control form-control-solid" rows="3" placeholder="Answer"></textarea>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove Question">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item border-bottom-1 border-bottom-dashed border-gray-300 mb-6 pb-6">
                        <span class="btn btn-icon icon-drag btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Drag Order">
                            <i class="bi bi-list fs-2"></i>
                        </span>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label required fw-bold fs-6">Question</label>
                                <div class="fv-row fv-plugins-icon-container">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Question">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <label class="col-form-label required fw-bold fs-6">Answer</label>
                                <div class="fv-row fv-plugins-icon-container">
                                    <textarea class="form-control form-control-solid" rows="3" placeholder="Answer"></textarea>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove Question">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item border-bottom-1 border-bottom-dashed border-gray-300 mb-6 pb-6">
                        <span class="btn btn-icon icon-drag btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Drag Order">
                            <i class="bi bi-list fs-2"></i>
                        </span>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label required fw-bold fs-6">Question</label>
                                <div class="fv-row fv-plugins-icon-container">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Question">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <label class="col-form-label required fw-bold fs-6">Answer</label>
                                <div class="fv-row fv-plugins-icon-container">
                                    <textarea class="form-control form-control-solid" rows="3" placeholder="Answer"></textarea>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove Question">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item mb-6">
                        <span class="btn btn-icon icon-drag btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Drag Order">
                            <i class="bi bi-list fs-2"></i>
                        </span>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label required fw-bold fs-6">Question</label>
                                <div class="fv-row fv-plugins-icon-container">
                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Question">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <label class="col-form-label required fw-bold fs-6">Answer</label>
                                <div class="fv-row fv-plugins-icon-container">
                                    <textarea class="form-control form-control-solid" rows="3" placeholder="Answer"></textarea>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove Question">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end pt-6 px-9">
                    <button type="reset" class="btn btn-success me-2">Add Question</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="swal2-container swal2-center swal2-backdrop-hide" style="display: none">
        <div aria-labelledby="swal2-title" aria-describedby="swal2-content"
             class="swal2-popup swal2-modal swal2-icon-warning swal2-hide" tabindex="-1" role="dialog"
             aria-live="assertive" aria-modal="true" style="display: flex;">
            <div class="swal2-header">
                <ul class="swal2-progress-steps" style="display: none;"></ul>
                <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                    <div class="swal2-icon-content">!</div>
                </div>
                <img class="swal2-image" style="display: none;">
                <h2 class="swal2-title" id="swal2-title" style="display: none;"></h2>
                <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×
                </button>
            </div>
            <div class="swal2-content">
                <div id="swal2-content" class="swal2-html-container" style="display: block;">Are you sure to delete this question?
                </div>
                <input class="swal2-input" style="display: none;"><input type="file" class="swal2-file"
                                                                         style="display: none;">
                <div class="swal2-range" style="display: none;"><input type="range">
                    <output></output>
                </div>
                <select class="swal2-select" style="display: none;"></select>
                <div class="swal2-radio" style="display: none;"></div>
                <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span
                        class="swal2-label"></span></label><textarea class="swal2-textarea"
                                                                     style="display: none;"></textarea>
                <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
            </div>
            <div class="swal2-actions">
                <div class="swal2-loader"></div>
                <button type="button" class="swal2-confirm btn btn-light-primary" aria-label=""
                        style="display: inline-block;">Yes
                </button>
                <button type="button" class="swal2-deny btn btn-danger" aria-label="" style="display: inline-block;">
                    No
                </button>
                <button type="button" class="swal2-cancel" aria-label="" style="display: none;">Cancel</button>
            </div>
            <div class="swal2-footer" style="display: none;"></div>
            <div class="swal2-timer-progress-bar-container">
                <div class="swal2-timer-progress-bar" style="display: none;"></div>
            </div>
        </div>
    </div>

</x-admin-content>
