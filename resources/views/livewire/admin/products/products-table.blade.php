<div class="table-responsive">
    <!--begin::Table-->
    <table id="kt_profile_overview_table" class="table table-row-bordered align-middle">
        <!--begin::Head-->
        <thead class="fs-7 text-gray-400 text-uppercase fw-bolder">
            <tr>
                <th class="text-center">Image</th>
                <th>
                    <a wire:click="orderBy('title')" href="#" class="@if ($orderField == 'title' && $orderValue == 'asc') text-success @elseif ($orderField == 'title' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">Product Name</a>
                    @if ($orderField == "title" && $orderValue == "asc")
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
                    @if ($orderField == "title" && $orderValue == "desc")
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
                <th class="text-center">Category</th>
                <th class="text-center">
                    <a wire:click="orderBy('cost_price')" href="#" class="@if ($orderField == 'cost_price' && $orderValue == 'asc') text-success @elseif ($orderField == 'cost_price' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">Cost Price</a>
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
                    <a wire:click="orderBy('stock')" href="#" class="@if ($orderField == 'stock' && $orderValue == 'asc') text-success @elseif ($orderField == 'stock' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">Stock</a>
                    @if ($orderField == "stock" && $orderValue == "asc")
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
                    @if ($orderField == "stock" && $orderValue == "desc")
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
                    <a wire:click="orderBy('manufacturer')" href="#" class="@if ($orderField == 'manufacturer' && $orderValue == 'asc') text-success @elseif ($orderField == 'manufacturer' && $orderValue == 'desc') text-danger @else text-gray-400 @endif text-hover-primary">Manufacturer</a>
                    @if ($orderField == "manufacturer" && $orderValue == "asc")
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
                    @if ($orderField == "manufacturer" && $orderValue == "desc")
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
                <th class="text-center">Active</th>
                <th class="min-w-50px text-center">Action</th>
            </tr>
        </thead>
        <!--end::Head-->
        <!--begin::Body-->
        <tbody class="fs-6">
            @foreach($products as $key => $product)
            <tr data-key='{{ $product->id }}' class="{{ $key % 2 == 0 ? 'odd' : 'even'}}">
                <td class="text-center">
                    @if($product->image_id)
                    <div class="d-block overlay">
                        <a class="edit_product d-block overlay" data-fslightbox="lightbox-hot-sales" href="#">
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-100px min-w-100px" style="background-image:url('{{ route('images', ['image_id' => $product->image->id, 'size' => '100']) }}')">
                            </div>
                            <div class="bg-opacity-25 overlay-layer card-rounded bg-dark">
                                <i class="text-white bi bi-eye-fill fs-2x"></i>
                            </div>
                        </a>
                    </div>
                    @endif
                </td>
                <td><a href="#" class="edit_product fs-6 text-gray-800 text-hover-primary">{{ $product->title }}</a></td>
                {{--<td class="text-center">@if($product->product_type_id) {{ $product->productType->title }} @endif</td>--}}
                <td class="text-center">
                    <div class="d-flex justify-content-center flex-wrap">
                        @foreach ($product->allCategories() as $category)
                        <a class="text-muted text-hover-primary" href="products?page=1&productType={{$category}}">{{ $category }}</a>
                        @if (!$loop->last)
                        &nbsp;<span class="text-muted">/</span>&nbsp;
                        @endif
                        @endforeach
                    </div>
                </td>
                <td class="text-center">
                    {{$product->formattedCostPriceRange()}}
                </td>
                <td class="text-center">
                    <span class="badge badge-light-primary fw-bolder px-4 py-3">In Stock</span>
                </td>
                <td class="text-center"><a href="products?page=1&manufacturerId={{$product->manufacturer_id}}" class="fs-6 text-gray-800 text-hover-primary">@if($product->manufacturer_id) {{ $product->manufacturer->title }} @endif</a></td>
                <td class="text-center">
                    @if ($product->is_active)
                    <span class="svg-icon svg-icon-1 svg-icon-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                            <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"></path>
                        </svg>
                    </span>
                    @else
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000"></path>
                        </svg>
                    </span>
                    @endif
                </td>
                <td class="text-center">
                    <div class="d-flex">
                        <a href="#" class="edit_product btn btn-icon btn-bg-light btn-active-color-primary btn-sm m-1">
                            <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        @if(Auth::user()->hasRole('super'))
                        <a href="#" class="delete_product btn btn-icon btn-bg-light btn-active-color-primary btn-sm m-1">
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
                        @endif
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <!--end::Body-->
    </table>
    <!--end::Table-->
</div>
