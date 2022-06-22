<div class="modal-body scroll-y">
    <!--begin::Form-->
    <form wire:submit.prevent="submit" enctype="multipart/form-data" id="kt_modal_add_item_form" class="form fv-plugins-bootstrap5 fv-plugins-framework">
        <!--begin::Scroll-->
        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_item_header" data-kt-scroll-wrappers="#kt_modal_add_item_scroll" data-kt-scroll-offset="300px" style="max-height: 583px;">
            <div class="card-body">
                <div class="row mb-6">
                    <label class="required fs-5 fw-bold mb-2">Item Images</label>
                    <div class="row mb-2" data-kt-buttons="true">
                        @foreach ($product_images as $image)
                        <!--begin::Option-->
                        <label class="position-relative left-9 w-auto m-2 btn btn-outline btn-outline-dashed btn-outline-default p-1 @if($image->id == $image_id) active @endif" @if($image->id == $image_id) style="border:2px solid;" @endif data-bs-toggle="tooltip" title="Click this image to make it primary">
                            <input wire:click="productImageRadioClickHandler({{ $image->id }})" type="radio" class="btn-check" name="account_team_size" value="1-1">
                            <img class="rounded" src="{{ route('images', ['image_id'=>$image->id, 'size'=>100, 'type'=>100]) }}" alt="User Profile Image" />
                            @if($image->id == $image_id)
                            <span class="badge badge-primary position-absolute shadow-sm" style="top:-8px; left:-8px; padding: 4px;">Primary</span>
                            @endif
                        </label>
                        <!--end::Option-->
                        @endforeach
                    </div>
                    <div class="form-text"></div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="row mb-6">
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">Item UOM</label>
                        <div wire:ignore>
                            <select data-control="select2" data-dropdown-parent="#kt_modal_edit_item" wire:model="item_uom_id" id="select-item-uom-id" aria-label="Select a UOM" data-placeholder="Select a UOM" class="form-select" tabindex="-1" aria-hidden="true">
                                <option value="" class="text-muted">Select a UOM</option>
                                @foreach ($itemUoms as $itemUom)
                                <option wire:key='item-uom-{{ $itemUom->id }}' value="{{ $itemUom->id }}">
                                    {{ $itemUom->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-text"></div>
                        @error('item_uom_id')
                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-6">
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">Stock Status</label>
                        <div wire:ignore>
                            <select data-control="select2" data-dropdown-parent="#kt_modal_edit_item" wire:model="stock_status_id" id="select-stock-status-id" aria-label="Select a Stock Status" data-placeholder="Select a Stock Status" class="form-select" tabindex="-1" aria-hidden="true">
                                <option value="" class="text-muted">Select a Stock Status</option>
                                @foreach ($stockStatuses as $stockStatus)
                                <option wire:key='item-stock-status-{{ $stockStatus->id }}' value="{{ $stockStatus->id }}">
                                    {{ $stockStatus->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-text"></div>
                        @error('stock_status_id')
                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">Quantity</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <div id="kt_dialer_quantity" class="position-relative">
                                <button wire:click="changePrice('decrease-quantity')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                                <input type="number" wire:model='quantity' class="px-12 text-center form-control" placeholder="Quantity">
                                <button wire:click="changePrice('increase-quantity')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            @error('quantity')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">Sale Price($)</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <div id="kt_dialer_sale_price" class="position-relative">
                                <button onclick="changePrice('decrease-sale-price')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                                <div wire:ignore>
                                    <input type="number" step="any" class="px-12 text-center form-control" placeholder="Sale Price">
                                </div>
                                <button onclick="changePrice('increase-sale-price')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            @error('sale_price')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">Cost Price($)</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <div id="kt_dialer_cost_price" class="position-relative">
                                <button onclick="changePrice('decrease-cost-price')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                                <div wire:ignore>
                                    <input type="number" step="any" class="px-12 text-center form-control" placeholder="Cost Price">
                                </div>
                                <button onclick="changePrice('increase-cost-price')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            @error('cost_price')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <div class="col-md-3 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Weight(lbs)</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <div id="kt_dialer_weight" class="position-relative">
                                <button wire:click="changePrice('decrease-weight')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                                <input type="number" wire:model.debounce.500ms='weight' class="px-12 text-center form-control" placeholder="Weight">
                                <button wire:click="changePrice('increase-weight')" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-3 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Length(in.)</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <div id="kt_dialer_length" class="position-relative">
                                <button wire:click="changePrice('decrease-length')" id="kt_dialer_decrease_btn" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                                <input type="number" wire:model.debounce.500ms='length' class="px-12 text-center form-control" placeholder="Length">
                                <button wire:click="changePrice('increase-length')" id="kt_dialer_increase_btn" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-3 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Width(in.)</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <div id="kt_dialer_width" class="position-relative">
                                <button wire:click="changePrice('decrease-width')" id="kt_dialer_decrease_btn" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                                <input type="number" wire:model.debounce.500ms='width' class="px-12 text-center form-control" placeholder="Width">
                                <button wire:click="changePrice('increase-width')" id="kt_dialer_increase_btn" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-3 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Height(in.)</label>
                        <div class="fv-row fv-plugins-icon-container">
                            <div id="kt_dialer_height" class="position-relative">
                                <button wire:click="changePrice('decrease-height')" id="kt_dialer_decrease_btn" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                                <input type="number" wire:model.debounce.500ms='height' class="px-12 text-center form-control" placeholder="Height">
                                <button wire:click="changePrice('increase-height')" id="kt_dialer_increase_btn" type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z" fill="#12131A"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-6">
                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                        <label class="required fs-5 fw-bold mb-2">MPN</label>
                        <input type="text" wire:model.debounce.500ms='mpn' class="form-control form-control-lg mb-3 mb-lg-0 fw-normal" placeholder="MPN" value="">
                        @error('mpn')
                        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Model Number</label>
                        <input type="text" wire:model.debounce.500ms='model_number' class="form-control form-control-lg mb-3 mb-lg-0 fw-normal" placeholder="Model Number" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                        <label class="fs-5 fw-bold mb-2">Part Number</label>
                        <input type="text" wire:model.debounce.500ms='part_number' class="form-control form-control-lg mb-3 mb-lg-0 fw-normal" placeholder="Part Number" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
                <div class="separator border-1 my-6"></div>
                <!-- <div class="row mb-6">
                    <label class="required fs-5 fw-bold mb-6">Item Options</label>
                </div> -->

                @foreach ($itemOptions as $itemOptionKey => $itemOption)
                <div class="row mb-6" wire:key="item-option-{{$itemOptionKey}}">
                    <label class="col-lg-2 col-form-label required fw-bold fs-6 text-capitalize">{{ App\Models\ItemOptionType::find($itemOption['item_option_type_id'])->title }}</label>
                    <div class="col-lg-4">
                        <div class="fv-row fv-plugins-icon-container">
                            <div wire:ignore>
                                <select data-control="select2" data-dropdown-parent="#kt_modal_edit_item" wire:model="itemOptions.{{ $itemOptionKey }}.item_option_value_id" aria-label="Select an option value" data-placeholder="Select an option value" class="form-select selected-item-option-select2" tabindex="-1" aria-hidden="true">
                                    <option value="" class="text-muted">Select an option value</option>
                                    @foreach ($itemOptionValues[$itemOption['item_option_type_id']] as $valueKey => $optionValue)
                                    <option value="{{ $valueKey }}">
                                        {{ $optionValue }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('itemOptions.'.$itemOptionKey.'.item_option_value_id')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <a wire:click="deleteOptionItem({{$itemOptionKey}})" href="#" class="delete_item_option btn btn-icon btn-bg-light btn-active-color-primary btn-sm m-1">
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
                </div>
                @endforeach

                <div class="row mb-6">
                    <div class="col-lg-6 border border-gray-300 border-dashed rounded p-1">
                        <div class="row w-100 m-0 d-flex align-items-baseline">
                            <div class="col-sm-8 fv-row fv-plugins-icon-container p-1 m-0">
                                <div wire:ignore>
                                    <select id="select2-add-new-option" data-control="select2" data-dropdown-parent="#kt_modal_edit_item" wire:model="addOptionType" aria-label="Select an option type" data-placeholder="Select an option type" class="form-select" tabindex="-1" aria-hidden="true">
                                        <option value="" class="text-muted">Select a option type</option>
                                        @foreach ($itemOptionTypes as $itemOptionType)
                                        <option value="{{ $itemOptionType->id }}">
                                            {{ $itemOptionType->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('addOptionType')
                                <div class="fv-plugins-message-container invalid-feedback">Please select option type</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 p-1 d-flex align-items-center"><button class="btn btn-success w-100 p-3" wire:click="addNewOption">Add Option</button></div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end::Scroll-->
            <!--begin::Actions-->
            <div class="text-center pt-15">
                <button wire:click="closeModal" type="button" class="btn btn-white me-3 close_item_edit_modal" data-kt-items-modal-action="cancel">Discard</button>
                <button wire:click="save" type="submit" class="btn btn-primary" data-kt-items-modal-action="submit">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <!--end::Actions-->
    </form>
    <!--end::Form-->

    <style>
        /* Chrome, Safari, Edge, Opera */
        #kt_dialer_sale_price input::-webkit-outer-spin-button,
        #kt_dialer_sale_price input::-webkit-inner-spin-button,
        #kt_dialer_cost_price input::-webkit-outer-spin-button,
        #kt_dialer_cost_price input::-webkit-inner-spin-button,
        #kt_dialer_quantity>input::-webkit-outer-spin-button,
        #kt_dialer_quantity>input::-webkit-inner-spin-button,
        #kt_dialer_weight>input::-webkit-outer-spin-button,
        #kt_dialer_weight>input::-webkit-inner-spin-button,
        #kt_dialer_length>input::-webkit-outer-spin-button,
        #kt_dialer_length>input::-webkit-inner-spin-button,
        #kt_dialer_width>input::-webkit-outer-spin-button,
        #kt_dialer_width>input::-webkit-inner-spin-button,
        #kt_dialer_height>input::-webkit-outer-spin-button,
        #kt_dialer_height>input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        #kt_dialer_sale_price input[type=number],
        #kt_dialer_cost_price input[type=number],
        #kt_dialer_quantity>input[type=number],
        #kt_dialer_weight>input[type=number],
        #kt_dialer_length>input[type=number],
        #kt_dialer_width>input[type=number],
        #kt_dialer_height>input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    @push('scripts')
    <script type="text/javascript">
        Livewire.on('itemUpdated', () => {
            $('#kt_modal_edit_item').modal('hide');
        });

        Livewire.on('internalNumberUpdated', internal_number => {
            let title = $('#title_modal_edit_item').html();
            if (title.indexOf('Add') > -1) {
                title = 'Add Item ' + '(' + internal_number + ')'
            }
            if (title.indexOf('Modify') > -1) {
                title = 'Modify Item ' + '(' + internal_number + ')'
            }
            $('#title_modal_edit_item').html(title);
        });

        $(".close_item_edit_modal").on('click', function(e) {
            $('#kt_modal_edit_item').modal('hide');
            @this.closeModal();
        });

        $(".btnNewItem").on('click', function(e) {
            $('#title_modal_edit_item').html('Add Item');
        });

        function popupItemEditModal(itemId, productId) {
            $('#kt_modal_edit_item').modal('show');
            $('.modal-backdrop').eq(1).css('z-index', 1060);

            if (itemId === 0) {
                $('#title_modal_edit_item').html('Add New Item');
            } else {
                $('#title_modal_edit_item').html('Modify Item');
            }
            Livewire.emit('toggleItem', {
                itemId: itemId,
                productId: productId
            });
        }

        function deleteProductItem(itemId) {
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
                    Livewire.emit('deleteProductItem', itemId);
                } else if (result.dismiss === "cancel") {
                    // Swal.fire(
                    //     "Cancelled",
                    //     "Your action has been canceled",
                    //     "error"
                    // )
                }
            });
        }

        $('.delete_item_option').on('click', function(e) {
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
                    window.livewire.emit('deleteItem', id);

                    location.reload();
                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "Cancelled",
                        "Your action has been canceled",
                        "error"
                    )
                }
            });
        });

        Livewire.on('itemValuesLoaded', values => {
            $('#select-item-uom-id').val(values['item_uom_id']).trigger('change');
            $('#select-stock-status-id').val(values['stock_status_id']).trigger('change');

            $("select.selected-item-option-select2").select2();
            $('#select2-add-new-option').select2();

            const itemOptionsCount = $("select.selected-item-option-select2").length;
            for (let i = 0; i < itemOptionsCount; i++) {
                $("select.selected-item-option-select2").eq(i).on('change', function(e) {
                    const selectedOptionValue = e.target.value;
                    @this.set(`itemOptions.${i}.item_option_value_id`, selectedOptionValue);
                });
            }

            $('#kt_dialer_sale_price input').val(values['sale_price']);
            $('#kt_dialer_cost_price input').val(values['cost_price']);
        });

        Livewire.on('newItemOptionAdded', values => {
            $('#select2-add-new-option').select2();
            $("select.selected-item-option-select2").select2();

            const itemOptionsCount = $("select.selected-item-option-select2").length;
            for (let i = 0; i < itemOptionsCount; i++) {
                $("select.selected-item-option-select2").eq(i).on('change', function(e) {
                    const selectedOptionValue = e.target.value;
                    @this.set(`itemOptions.${i}.item_option_value_id`, selectedOptionValue);
                });
            }
        });

        $('#select-item-uom-id').select2();
        $('#select-item-uom-id').on('change', function(e) {
            @this.set('item_uom_id', $('#select-item-uom-id').select2("val"));
        });

        $('#select-stock-status-id').select2();
        $('#select-stock-status-id').on('change', function(e) {
            @this.set('stock_status_id', $('#select-stock-status-id').select2("val"));
        });

        $('#select2-add-new-option').select2();
        $('#select2-add-new-option').on('change', function(e) {
            @this.set('addOptionType', $('#select2-add-new-option').select2("val"));
        });

        $('#kt_dialer_sale_price input').on('keyup', function(e) {
            let newValue = e.target.value;

            const dotPos = newValue.indexOf('.');
            if (dotPos > -1) {
                newValue = newValue.substring(0, dotPos + 3);
            }

            $('#kt_dialer_sale_price input').val(newValue);
            @this.set('sale_price', newValue);
        });

        $('#kt_dialer_cost_price input').on('keyup', function(e) {
            let newValue = e.target.value;

            const dotPos = newValue.indexOf('.');
            if (dotPos > -1) {
                newValue = newValue.substring(0, dotPos + 3);
            }

            $('#kt_dialer_cost_price input').val(newValue);
            @this.set('cost_price', newValue);
        });

        function changePrice(mode) {
            if (mode == 'decrease-sale-price') {
                const val = Number($('#kt_dialer_sale_price input').val());
                const newVal = val - 1 > 0 ? (val - 1).toFixed(2) : 0;
                $('#kt_dialer_sale_price input').val(newVal);
                @this.set('sale_price', newVal);
            }
            if (mode == 'increase-sale-price') {
                const val = Number($('#kt_dialer_sale_price input').val());
                const newVal = (val + 1).toFixed(2);
                $('#kt_dialer_sale_price input').val(newVal);
                @this.set('sale_price', newVal);
            }
            if (mode == 'decrease-cost-price') {
                const val = Number($('#kt_dialer_cost_price input').val());
                const newVal = val - 1 > 0 ? (val - 1).toFixed(2) : 0;
                $('#kt_dialer_cost_price input').val(newVal);
                @this.set('cost_price', newVal);
            }
            if (mode == 'increase-cost-price') {
                const val = Number($('#kt_dialer_cost_price input').val());
                const newVal = (val + 1).toFixed(2);
                $('#kt_dialer_cost_price input').val(newVal);
                @this.set('cost_price', newVal);
            }
        }
    </script>
    @endpush
</div>
