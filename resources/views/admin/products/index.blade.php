@section('title', 'Product Management')
<x-admin-content>
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
                <livewire:admin.products.filter-options-menu :page="$products->currentPage()"
                    :productName="$productName" :internalNumber="$internalNumber" :manufacturerId="$manufacturerId"
                    :minPrice="$minPrice" :maxPrice="$maxPrice" />
                <!--begin::Add product-->
                <button onclick="Livewire.emit('toggleProduct', 0);" type="button"
                    class="btn btn-sm btn-primary btnNewProduct" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_add_product">
                    Add Product
                </button>
                <!--end::Add product-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <div id="kt_post" class="post d-flex flex-column-fluid">
        <div class="container">
            <div class="card mb-5 mb-xxl-8">
                <!--end::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        {{ $titleDesc }}
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-product-table-toolbar="base">
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-product-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-product-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-product-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table container-->
                    <livewire:admin.products.products-table :products="$products" :page="$products->currentPage()"
                        :productName="$productName" :internalNumber="$internalNumber" :manufacturerId="$manufacturerId"
                        :minPrice="$minPrice" :maxPrice="$maxPrice" />
                    <!--end::Table container-->
                    <div class="row">
                        <div
                            class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="dataTables_paginate paging_simple_numbers" id="kt_table_products_paginate">
                                <ul class="pagination">

                                    <li class="paginate_button page-item previous @if($products->currentPage() == 1) disabled @endif"
                                        id="kt_table_products_previous">
                                        <a href="@if($products->currentPage() != 1) {{ $url }}?page=1{{ $productName != '' ? "&productName={$productName}" : ""}} @else # @endif"
                                            aria-controls="kt_table_products" data-dt-idx="0" tabindex="0"
                                            class="page-link"><i class="previous"></i></a>
                                    </li>

                                    @foreach($elements_links as $element)
                                    @if(is_array($element))
                                    @foreach($element as $k => $page_link)
                                    <li
                                        class="paginate_button page-item @if($k == $products->currentPage()) active @endif">
                                        <a href="{{ $page_link }}{{ $productName != '' ? "&productName={$productName}" : ""}}"
                                            aria-controls="kt_table_products" data-dt-idx="{{$k}}" tabindex="{{$k}}"
                                            class="page-link">{{ $k }}</a>
                                    </li>
                                    @endforeach
                                    @else
                                    <li class="paginate_button page-item">
                                        <a href="#" aria-controls="kt_table_products"
                                            class="page-link">{{ $element }}</a>
                                    </li>
                                    @endif
                                    @endforeach

                                    <li class="paginate_button page-item next @if($products->currentPage() == $products->lastPage()) disabled @endif"
                                        id="kt_table_products_next">
                                        <a href="@if($products->currentPage() != $products->lastPage()) {{ $url }}?page={{$products->lastPage()}}{{ $productName != '' ? "&productName={$productName}" : ""}} @else # @endif"
                                            aria-controls="kt_table_products" data-dt-idx="4" tabindex="0"
                                            class="page-link"><i class="next"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>

    <!--begin::Modal - Edit task-->
    <div class="modal fade" id="kt_modal_add_product" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-1000px">
            <!--begin::Modal content-->
            @livewire("admin.products.product-form")
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>

    <!--begin::Modal - Edit Item-->
    <div class="modal fade" style="z-index:1061" id="kt_modal_edit_item" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_item_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder" id='title_modal_edit_item'></h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary close_item_edit_modal"
                        data-kt-items-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                    fill="#000000">
                                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                    <rect fill="#000000" opacity="0.5"
                                        transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                        x="0" y="7" width="16" height="2" rx="1"></rect>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                @livewire("admin.products.item-form")
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Edit Item-->
</x-admin-content>
