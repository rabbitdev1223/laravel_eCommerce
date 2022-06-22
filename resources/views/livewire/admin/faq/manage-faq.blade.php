<div>
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
                <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="flex-wrap mb-5 page-title d-flex align-items-center me-3 mb-lg-0 lh-1">
                    <!--begin::Title-->
                    <h1 class="my-1 d-flex align-items-center text-dark fw-bolder fs-3">@yield('title')</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="py-1 d-flex align-items-center">
                    <!--begin::Button-->
                    <a wire:click.prevent='addItem' class="btn btn-sm btn-primary me-2" id="kt_toolbar_primary_button">Add Question</a>
                    <a wire:click.prevent='save' class="btn btn-sm btn-success" id="kt_toolbar_primary_button">Save Changes</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <div id="kt_post" class="post d-flex flex-column-fluid">
            <div class="container">
                <div class="card mb-5 mb-xxl-8">
                    <div id="draggable-zone" class="card-body draggable-zone">
                        @foreach ($faqs as $index => $faqItem)
                        <div wire:key="faq-{{ $index }}" id="{{ $index }}" class="draggable draggable-handle bg-white px-4 faq-item border-bottom-1 border-bottom-dashed border-gray-300 mb-6 pb-6">
                            <span class="draggable-handle btn btn-icon icon-drag btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Drag Order">
                                <i class="bi bi-list fs-2"></i>
                            </span>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="col-form-label required fw-bold fs-6">Question</label>
                                    <div class="fv-row fv-plugins-icon-container">
                                        <input wire:model="faqs.{{ $index }}.question" type="text" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Question">
                                        @error('faqs.'.$index.'.question')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <label class="col-form-label required fw-bold fs-6">Answer</label>
                                    <div class="fv-row fv-plugins-icon-container">
                                        <textarea wire:model="faqs.{{ $index }}.answer" class="form-control form-control-solid" rows="3" placeholder="Answer"></textarea>
                                        <span wire:click="setItemIndex({{ $index }})" data-bs-toggle="modal" data-bs-target="#modal_remove_faq_alert" class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-white shadow" data-kt-image-input-action="remove" title="" data-bs-original-title="Remove Question">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        @error('faqs.'.$index.'.answer')
                                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Modal-->
        <div wire:ignore class="modal fade" tabindex="-1" id="modal_remove_faq_alert">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--begin::Alert-->
                    <div class="d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-0">

                        <div class="position-absolute top-0 end-0 btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-2x">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                        </div>
                        <!--end::Close-->

                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-5tx svg-icon-danger mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"></path>
                                <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"></rect>
                                <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"></rect>
                            </svg></span>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="text-center">
                            <!--begin::Title-->
                            <h6 class="fw-bolder fs-1 mb-5">Are you sure you want to delete this question?</h6>
                            <!--end::Title-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
                            <!--end::Separator-->
                            <!--begin::Buttons-->
                            <div class="d-flex flex-center flex-wrap">
                                <a href="#" data-bs-dismiss="modal" class="btn btn-outline btn-outline-danger btn-active-danger m-2">Cancel</a>
                                <a wire:click="deleteItem" data-bs-dismiss="modal" class="btn btn-danger m-2">Ok, delete it</a>
                            </div>
                            <!--end::Buttons-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Alert-->
                </div>
            </div>
        </div>
        <!--end::Modal-->
        @push('scripts')
        <script>
            const containers = document.querySelectorAll(".draggable-zone");

            if (containers.length !== 0) {
                const swappable = new Swappable.default(containers, {
                    draggable: ".draggable",
                    handle: ".draggable .draggable-handle",
                    mirror: {
                        //appendTo: selector,
                        appendTo: "body",
                        constrainDimensions: true
                    }
                });

                let originIndex;
                swappable.on("drag:start", (e) => {
                    originIndex = e.originalSource.getAttribute('id');
                });
                swappable.on("drag:stop", (e) => {
                    const updatedDraggableItems = document.getElementsByClassName('draggable');

                    const notHiddenItems = Array.from(updatedDraggableItems).filter(item => getComputedStyle(item).display !== "none");
                    const targetIndex = notHiddenItems.findIndex(item => {
                        const itemIndex = item.getAttribute('id');
                        return itemIndex === originIndex;
                    });

                    const originId = notHiddenItems[originIndex].getAttribute('id');
                    const targetId = notHiddenItems[targetIndex].getAttribute('id');

                    @this.swap(originId, targetId);
                });
            }
        </script>
        @endpush

    </x-admin-content>
</div>
