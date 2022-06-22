@section('title', 'Support Message Manager')

<x-admin-content>
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="flex-wrap mb-5 page-title d-flex align-items-center me-3 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="my-1 d-flex align-items-center text-dark fw-bolder fs-3">@yield('title')
                    <!--begin::Separator-->
                    <span class="mx-2 border-gray-200 h-20px border-start ms-3"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <!--                      <small class="my-1 text-muted fs-7 fw-bold ms-1">#XRS-45670</small>  -->
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container">
            <div class='row'>
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <livewire:admin.support-message.search :page="$messages->currentPage()" :search="$search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-message-table-toolbar="base">
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-message-table-toolbar="selected">
                                <div class="fw-bolder me-5">
                                    <span class="me-2" data-kt-message-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger" data-kt-message-table-select="delete_selected">Delete Selected</button>
                            </div>
                            <!--end::Group actions-->

                            <!--begin::Modal - Add task-->
                            <div class="modal fade" id="kt_modal_view_message" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_view_message_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bolder" id='title_modal'>View Message</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary close_modal" data-kt-messages-modal-action="close">
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
                                        @livewire("admin.support-message.form")
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - Add task-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_table_messages_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <livewire:admin.support-message.messages-table :messages="$messages" />
                            <div class="row">
                                <div class="col-sm-12 col-md-12 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <div class="dataTables_paginate paging_simple_numbers" id="kt_table_messages_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous @if($messages->currentPage() == 1) disabled @endif" id="kt_table_messages_previous">
                                                <a href="@if($messages->currentPage() != 1) {{ $url }}?page=1{{ $search != '' ? "&search={$search}" : ""}} @else # @endif" aria-controls="kt_table_messages" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a>
                                            </li>
                                            @foreach($elements_links as $element)
                                            @if(is_array($element))
                                            @foreach($element as $k => $page_link)
                                            <li class="paginate_button page-item @if($k == $messages->currentPage()) active @endif">
                                                <a href="{{ $page_link }}{{ $search != '' ? "&search={$search}" : ""}}" aria-controls="kt_table_messages" data-dt-idx="{{$k}}" tabindex="{{$k}}" class="page-link">{{ $k }}</a>
                                            </li>
                                            @endforeach
                                            @else
                                            <li class="paginate_button page-item">
                                                <a href="#" aria-controls="kt_table_messages" class="page-link">{{ $element }}</a>
                                            </li>
                                            @endif
                                            @endforeach
                                            <li class="paginate_button page-item next @if($messages->currentPage() == $messages->lastPage()) disabled @endif" id="kt_table_messages_next">
                                                <a href="@if($messages->currentPage() != $messages->lastPage()) {{ $url }}?page={{$messages->lastPage()}}{{ $search != '' ? "&search={$search}" : ""}} @else # @endif" aria-controls="kt_table_messages" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
        </div>
    </div>

</x-admin-content>
