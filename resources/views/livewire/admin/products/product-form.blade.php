<div class="modal-content">
    <!--begin::Modal header-->
    <div class="modal-header" id="kt_modal_add_product_header">
        <!--begin::Modal title-->
        <div class="d-flex align-items-center">
            <h2 class="fw-bolder" id='title_modal'>{{ $modal_title }}</h2>
            @if($is_active && count($items) > 0)<a class="btn btn-sm btn-light btn-active-light-primary ms-5" @if($product) href="{{ route('products.show', $product) }}" #@endif target="_blank">View on frontend</a>@endif
        </div>
        <!--end::Modal title-->
        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-icon-primary close_modal" data-kt-products-modal-action="close">
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
    <div class="modal-body scroll-y">
        <!--begin::Form-->
        <!--begin::Scroll-->
        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_product_header" data-kt-scroll-wrappers="#kt_modal_add_product_scroll" data-kt-scroll-offset="300px" style="max-height: 583px;">
            <div class="card-body">
                <div>
                    @if($product_id)
                    <div class="row mb-6">
                        <label class="required fs-5 fw-bold mb-2">Product Image</label>
                        <div class="row mb-2" data-kt-buttons="true">
                            @foreach ($product_images as $image)
                            <!--begin::Option-->
                            <div class="position-relative w-auto m-3 p-0">
                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-1 @if($image->id == $image_id) active @endif" @if($image->id == $image_id) style="border:2px solid;" @endif
                                    data-bs-toggle="tooltip" title="Click this image to make it primary">
                                    <input wire:click="productImageRadioClickHandler({{ $image->id }})" type="radio" class="btn-check" name="account_team_size" value="">
                                    <img class="rounded" src="{{ route('images', ['image_id'=>$image->id, 'size'=>100, 'type'=>100]) }}" alt="User Profile Image" />
                                </label>
                                <span wire:click="deleteImageHandler({{ $image->id }})" style="top:-12px; right:-8px;" class="position-absolute btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                @if($image->id == $image_id)
                                <span class="badge badge-primary position-absolute shadow-sm" style="top:-8px; left:-8px; padding: 4px;">Primary</span>
                                @endif
                            </div>
                            <!--end::Option-->
                            @endforeach
                        </div>
                        <div>
                            <a class="btn-sm btn-primary position-relative d-inline-block text-white">
                                <span wire:loading.class="d-none" class="d-block">Add image</span>
                                <div wire:loading wire:target="imagesToUpload" data-kt-indicator="on">
                                    <span class="indicator-progress">
                                        Adding Image...<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </div>
                                <input multiple wire:loading.attr="disabled" type="file" wire:model='imagesToUpload' name="product" accept=".png, .jpg, .jpeg" class="position-absolute top-0 right-0 bottom-0 opacity-0" style="left: 0; width: 100%; cursor: pointer;" />
                            </a>
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        </div>
                    </div>
                    <div class="separator border-1 my-10"></div>
                    @endif
                </div>
                <div class="row mb-6 align-items-center">
                    <label class="col-lg-2 col-form-label fw-bold fs-6">Active</label>
                    <div class="col-lg-10">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input wire:change="toggleActive()" @if(count($items)==0) disabled @endif class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitch20x30" @if($is_active) checked @endif>
                            <div class="form-text"></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">Product Title</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <input type="text" wire:model.debounce.500ms='title' class="form-control form-control-lg mb-3 mb-lg-0 fw-normal" placeholder="">
                            <div class="form-text"></div>
                            @error('title')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Slug</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <input disabled type="text" wire:model='slug' class="form-control form-control-lg mb-3 mb-lg-0 fw-normal" placeholder="" value="" />
                            @error('slug')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-2 col-form-label required fw-bold fs-6">Description</label>
                    <div class="col-lg-10">
                        <div class="fv-row fv-plugins-icon-container">
                            <textarea wire:model.debounce.500ms='description' class="form-control form-control-lg mb-3 mb-lg-0 fw-normal" rows="3" placeholder="Answer"></textarea>
                            @error('description')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Category</label>
                        <livewire:admin.products.select-category-menu />
                    </div>
                    <div id="manufacturerContainer" class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">Manufacturer</label>
                        <div wire:ignore class="fv-row fv-plugins-icon-container">
                            <select wire:model="manufacturer_id" data-control="select2" aria-label="Select a manufacturer" class="form-select" tabindex="-1" aria-hidden="true" id='select-manufacturer-id' data-dropdown-parent="#kt_modal_add_product" data-placeholder="Select an option">
                                <option value="" class="text-muted">Select Manufacturer</option>
                                @foreach ($manufacturers as $manufacturer)
                                <option value="{{ $manufacturer->id }}">
                                    {{ $manufacturer->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        @error('manufacturer_id')
                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div wire:ignore>
                </div>
                <div class="row mb-6">
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">SEO Keyword</label>
                        <div wire:ignore class="fv-row fv-plugins-icon-container">
                            <input wire:model='seo_keyword' class="form-control form-control-lg" type="text" id="kt_tagify_seo_keyword" />
                        </div>
                        <div class="form-text"></div>
                        @error('seo_keyword')
                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Meta Description</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <input type="text" wire:model.debounce.500ms='meta_description' class="form-control form-control-lg mb-3 mb-lg-0 fw-normal" placeholder="">
                            <div class="form-text"></div>
                            @error('meta_description')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-6 align-items-center">
                    <label class="col-lg-2 col-form-label fw-bold fs-6">Meta Keywords</label>
                    <div class="col-lg-10">
                        <div wire:ignore class="fv-row fv-plugins-icon-container">
                            <input wire:model='meta_keywords' class="form-control form-control-lg" type="text" id="kt_tagify_meta_keywords" />
                        </div>
                        <div class="form-text"></div>
                        @error('meta_keywords')
                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="separator border-1 mt-10 mb-4"></div>
            <div class="row mb-6">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end">
                    <!--begin::Add product-->
                    <button @if(!$product_id) disabled @endif onclick="popupItemEditModal(0, {{$product_id}})" type="button" class="btn btn-sm btn-primary">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                                <rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        Add Item
                    </button>
                    <!--end::Add product-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Table container-->
                @if(count($items) > 0)
                <div class="table-responsive mt-4">
                    <!--begin::Table-->
                    <table id="kt_profile_overview_table" class="table table-row-dashed align-middle">
                        <!--begin::Head-->
                        <thead class="fs-7 text-gray-400 text-uppercase fw-bolder">
                            <tr>
                                <th class="text-center">Image</th>
                                <th><a wire:click="orderBy('uom')" href="#" class="@if ($orderField == 'uom' && $orderValue == 'asc') text-success @elseif ($orderField == 'uom' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">UOM</a>
                                    @if ($orderField == "uom" && $orderValue == "asc")
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                    @if ($orderField == "uom" && $orderValue == "desc")
                                    <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                </th>
                                <th class="text-center">
                                    <a wire:click="orderBy('sale_price')" href="#" class="@if ($orderField == 'sale_price' && $orderValue == 'asc') text-success @elseif ($orderField == 'sale_price' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">Sale
                                        Price</a>
                                    @if ($orderField == "sale_price" && $orderValue == "asc")
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                    @if ($orderField == "sale_price" && $orderValue == "desc")
                                    <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                </th>
                                <th class="text-center">
                                    <a wire:click="orderBy('cost_price')" href="#" class="@if ($orderField == 'cost_price' && $orderValue == 'asc') text-success @elseif ($orderField == 'cost_price' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">Cost
                                        Price</a>
                                    @if ($orderField == "cost_price" && $orderValue == "asc")
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                    @if ($orderField == "cost_price" && $orderValue == "desc")
                                    <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                </th>
                                <th class="text-center">
                                    <a wire:click="orderBy('stock_status')" href="#" class="@if ($orderField == 'stock_status' && $orderValue == 'asc') text-success @elseif ($orderField == 'stock_status' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">Stock
                                        Status</a>
                                    @if ($orderField == "stock_status" && $orderValue == "asc")
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                    @if ($orderField == "stock_status" && $orderValue == "desc")
                                    <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                </th>
                                <th class="text-center">
                                    <a wire:click="orderBy('quantity')" href="#" class="@if ($orderField == 'quantity' && $orderValue == 'asc') text-success @elseif ($orderField == 'quantity' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">QTY</a>
                                    @if ($orderField == "quantity" && $orderValue == "asc")
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                    @if ($orderField == "quantity" && $orderValue == "desc")
                                    <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                </th>
                                <th class="text-center">
                                    <a wire:click="orderBy('internal_number')" href="#" class="@if ($orderField == 'internal_number' && $orderValue == 'asc') text-success @elseif ($orderField == 'internal_number' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">Internal
                                        No</a>
                                    @if ($orderField == "internal_number" && $orderValue == "asc")
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                    @if ($orderField == "internal_number" && $orderValue == "desc")
                                    <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    @endif
                                </th>
                                <th class="text-center">Item Options</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <!--end::Head-->
                        <!--begin::Body-->
                        <tbody class="fs-6">
                            @if($items)
                            @foreach($items as $key => $item)
                            <tr data-key='{{ $item->id }}' class="{{ $key % 2 == 0 ? 'odd' : 'even'}}">
                                <td class="text-center">
                                    @if($item->image_id)
                                    <div class="d-block overlay">
                                        <a onclick="popupItemEditModal({{$item->id}}, {{$product_id}})" class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="#">
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-50px min-w-50px" style="background-image:url('{{ route('images', ['image_id' => $item->image->id, 'size' => '50']) }}')">
                                            </div>
                                            <div class="bg-opacity-25 overlay-layer card-rounded bg-dark">
                                                <i class="text-white bi bi-eye-fill fs-2x"></i>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                </td>
                                <td>{{$item->itemUom->title}}</td>
                                <td class="text-center">${{$item->sale_price / 100}}</td>
                                <td class="text-center">${{$item->cost_price / 100}}</td>
                                <td class="text-center">
                                    @switch($item->stockStatus->id)
                                    @case(1)
                                    <span class="badge badge-light-primary fw-bolder">
                                        {{trim($item->stockStatus->title)}}
                                    </span>
                                    @break
                                    @case(2)
                                    <span class="badge badge-light-success fw-bolder">
                                        {{trim($item->stockStatus->title)}}
                                    </span>
                                    @break
                                    @case(3)
                                    <span class="badge badge-light-danger fw-bolder">
                                        {{trim($item->stockStatus->title)}}
                                    </span>
                                    @break
                                    @case(4)
                                    <span class="badge badge-light-warning fw-bolder">
                                        {{trim($item->stockStatus->title)}}
                                    </span>
                                    @break
                                    @endswitch
                                </td>
                                <td class="text-center">{{$item->quantity}}</td>
                                <td class="text-center">{{$item->internal_number}}</td>
                                <td class="text-center">
                                    <div class="d-flex flex-wrap justify-content-center m-auto" style="max-width:160px;">
                                        @foreach($item->itemOptions as $itemKey => $itemOption)
                                        <!-- @if($item->itemOptions->first() != $itemOption)
                                                    ,
                                                    @endif -->
                                        <span class="badge badge-secondary" style="margin: 2px;">{{$itemOption->itemOptionType->title}}({{$itemOption->itemOptionValue->title}})</span>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a onclick="popupItemEditModal({{$item->id}}, {{$product_id}})" href="#" class="edit_item btn btn-icon btn-bg-light btn-active-color-primary btn-sm m-1">
                                            <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                                    </path>
                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <a onclick="deleteProductItem({{$item->id}})" href="#" class="delete_product_item btn btn-icon btn-bg-light btn-active-color-primary btn-sm m-1">
                                            <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                        <!--end::Body-->
                    </table>
                    <!--end::Table-->
                </div>
                @endif
                <!--end::Table container-->
            </div>
        </div>
    </div>
    <!--end::Scroll-->
    <!--begin::Actions-->
    <div class="text-center pt-2 pb-6">
        <button type="button" class="btn btn-white me-3 close_modal" data-kt-products-modal-action="cancel">Discard</button>
        <button wire:click="save" type="submit" class="btn btn-primary" data-kt-products-modal-action="submit">
            <span class="indicator-label">Submit</span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>
    <!--end::Actions-->
    <!--end::Modal body-->
</div>
</div>

@push('scripts')
<script type="text/javascript">
    $(".close_modal").on('click', function(e) {
        seo_keyword_tagify_input.removeAllTags();
        meta_keyword_tagify_input.removeAllTags();
        $('#kt_modal_add_product').modal('hide');
        @this.resetFields();
    });

    $("#kt_modal_add_product").on('hidden.bs.modal', function(e) {
        seo_keyword_tagify_input.removeAllTags();
        meta_keyword_tagify_input.removeAllTags();
        @this.resetFields();
    });

    $(".edit_product").on('click', function(e) {
        var id = $(this).parents('tr').attr('data-key');
        Livewire.emit('toggleProduct', id);
        $('#kt_modal_add_product').modal('show');
    });

    $(".delete_product").on('click', function(e) {
        var id = $(this).parents('tr').attr('data-key');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, remove it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
        }).then(function(result) {
            if (result.value) {
                Livewire.emit('deleteProduct', id);
            } else if (result.dismiss === "cancel") {
                // Swal.fire(
                //     "Cancelled",
                //     "Your action has been canceled",
                //     "error"
                // )
            }
        });
    });

    $('#select-manufacturer-id').select2();

    $('#select-manufacturer-id').on('change', function(e) {
        @this.set('manufacturer_id', $('#select-manufacturer-id').select2("val"));
    });

    Livewire.on('valuesUpdated', values => {
        $('#select-manufacturer-id').val(values['manufacturer_id']).trigger('change');

        if (values['seo_keyword']) {
            $splitSeoKeywords = values['seo_keyword'].split(',');
            seo_keyword_tagify_input.addTags($splitSeoKeywords);
        }

        if (values['meta_keywords']) {
            $splitMetaKeywords = values['meta_keywords'].split(',');
            meta_keyword_tagify_input.addTags($splitMetaKeywords);
        }
    });

    var kt_tagify_seo_keyword_input = document.querySelector("#kt_tagify_seo_keyword");
    var seo_keyword_tagify_input = new Tagify(kt_tagify_seo_keyword_input);

    $("#kt_tagify_seo_keyword").on('change', function() {
        const newSeoKeyword = seo_keyword_tagify_input.value.map(tag => tag.value).join(',');
        @this.set('seo_keyword', newSeoKeyword);
    });

    var kt_tagify_meta_keywords_input = document.querySelector("#kt_tagify_meta_keywords");
    var meta_keyword_tagify_input = new Tagify(kt_tagify_meta_keywords_input)

    $("#kt_tagify_meta_keywords").on('change', function() {
        const newMetaKeyword = meta_keyword_tagify_input.value.map(tag => tag.value).join(',');
        @this.set('meta_keywords', newMetaKeyword);
    });
</script>
@endpush
