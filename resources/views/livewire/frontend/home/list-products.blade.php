<div class="card mt-md-20 mt-6">
    <div class="card-body p-10 p-lg-16">
        <div class="row g-10">
            @forelse ($products as $product)
            <div wire:key='product-{{ $product->id }}' animate-move class="col-sm-6 col-md-4 position-relative">
                <div class="card-xl-stretch me-md-6">
                    <div class="d-block overlay">
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ route('products.show', $product) }}">
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-300px" @if($product->image) style="background-image:url('{{ route('images', ['image_id' => $product->image->id, 'size' => '345']) }}')" @endif></div>
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="bi bi-eye-fill fs-2x text-white"></i>
                            </div>
                        </a>
                    </div>
                    <div class="mt-3 d-flex flex-column">
                        <a href="{{ route('products.show', $product) }}" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base d-block h-50px overflow-hidden">{{ $product->title }}</a>
                        <div class="fw-bold fs-5 text-gray-600 text-dark mt-1">{{ $product->formattedCategories() }}</div>
                        <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                            <span class="badge badge-white border-dashed fs-2 fw-bolder text-dark p-2">{{ $product->formattedPriceRange() }}</span>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <!--begin::Empty-->
            <div data-kt-search-element="empty" class="text-center">
                <!--begin::Icon-->
                <div class="pt-10 pb-10">
                    <!--begin::Svg Icon | path: icons/duotone/Interface/File-Search.svg-->
                    <span class="opacity-50 svg-icon svg-icon-4x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.25" d="M3 4C3 2.34315 4.34315 1 6 1H15.7574C16.553 1 17.3161 1.31607 17.8787 1.87868L20.1213 4.12132C20.6839 4.68393 21 5.44699 21 6.24264V20C21 21.6569 19.6569 23 18 23H6C4.34315 23 3 21.6569 3 20V4Z" fill="#12131A" />
                            <path d="M15 1.89181C15 1.39927 15.3993 1 15.8918 1V1C16.6014 1 17.2819 1.28187 17.7836 1.78361L20.2164 4.21639C20.7181 4.71813 21 5.39863 21 6.10819V6.10819C21 6.60073 20.6007 7 20.1082 7H16C15.4477 7 15 6.55228 15 6V1.89181Z" fill="#12131A" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.032 15.4462C12.4365 15.7981 11.7418 16 11 16C8.79086 16 7 14.2091 7 12C7 9.79086 8.79086 8 11 8C13.2091 8 15 9.79086 15 12C15 12.7418 14.7981 13.4365 14.4462 14.032L16.7072 16.293C17.0977 16.6835 17.0977 17.3167 16.7072 17.7072C16.3167 18.0977 15.6835 18.0977 15.293 17.7072L13.032 15.4462ZM13 12C13 13.1046 12.1046 14 11 14C9.89543 14 9 13.1046 9 12C9 10.8954 9.89543 10 11 10C12.1046 10 13 10.8954 13 12Z" fill="#12131A" />
                        </svg>
                    </span>
                </div>
                <div class="pb-15 fw-bold">
                    <h3 class="mb-2 text-gray-600 fs-5">No result found</h3>
                    <div class="text-muted fs-7">Please try again with a different query
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
