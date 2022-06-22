<div data-kt-search-element="wrapper">
    <!--begin::Form-->
    <form wire:submit.prevent data-kt-search-element="form" class=" w-100 position-relative" autocomplete="off">
        <!--begin::Icon-->
        <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
        <span
            class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path
                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    <path
                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
        <!--end::Icon-->
        <!--begin::Input-->
        <input wire:model.debounce.500ms='search' type="search" class="form-control form-control-flush ps-10"
            placeholder="Search..." data-kt-search-element="input" onkeypress="return event.keyCode != 13;" />
        <!--end::Input-->
        <!--begin::Spinner-->
        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
            data-kt-search-element="spinner">
            <span class="text-gray-400 align-middle spinner-border h-15px w-15px"></span>
        </span>
        <!--end::Spinner-->
        <!--begin::Reset-->
        <span
            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
            data-kt-search-element="clear">
            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                        fill="#000000">
                        <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                        <rect fill="#000000" opacity="0.5"
                            transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                            x="0" y="7" width="16" height="2" rx="1" />
                    </g>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </span>
        <!--end::Reset-->

    </form>
    <!--end::Form-->


    <!--begin::Empty-->
    <div data-kt-search-element="empty" class="text-center d-none">
        <!--begin::Icon-->
        <div class="pt-10 pb-10">
            <!--begin::Svg Icon | path: icons/duotone/Interface/File-Search.svg-->
            <span class="opacity-50 svg-icon svg-icon-4x">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.25"
                        d="M3 4C3 2.34315 4.34315 1 6 1H15.7574C16.553 1 17.3161 1.31607 17.8787 1.87868L20.1213 4.12132C20.6839 4.68393 21 5.44699 21 6.24264V20C21 21.6569 19.6569 23 18 23H6C4.34315 23 3 21.6569 3 20V4Z"
                        fill="#12131A" />
                    <path
                        d="M15 1.89181C15 1.39927 15.3993 1 15.8918 1V1C16.6014 1 17.2819 1.28187 17.7836 1.78361L20.2164 4.21639C20.7181 4.71813 21 5.39863 21 6.10819V6.10819C21 6.60073 20.6007 7 20.1082 7H16C15.4477 7 15 6.55228 15 6V1.89181Z"
                        fill="#12131A" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.032 15.4462C12.4365 15.7981 11.7418 16 11 16C8.79086 16 7 14.2091 7 12C7 9.79086 8.79086 8 11 8C13.2091 8 15 9.79086 15 12C15 12.7418 14.7981 13.4365 14.4462 14.032L16.7072 16.293C17.0977 16.6835 17.0977 17.3167 16.7072 17.7072C16.3167 18.0977 15.6835 18.0977 15.293 17.7072L13.032 15.4462ZM13 12C13 13.1046 12.1046 14 11 14C9.89543 14 9 13.1046 9 12C9 10.8954 9.89543 10 11 10C12.1046 10 13 10.8954 13 12Z"
                        fill="#12131A" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Icon-->
        <!--begin::Message-->
        <div class="pb-15 fw-bold">
            <h3 class="mb-2 text-gray-600 fs-5">No result found</h3>
            <div class="text-muted fs-7">Please try again with a different query
            </div>
        </div>
        <!--end::Message-->
    </div>
    <!--end::Empty-->
</div>
