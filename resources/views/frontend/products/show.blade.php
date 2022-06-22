<x-content>
    <style>
        .form-check.color-radio.form-check-solid .form-check-input[type=radio] {
            background-size: 30px;
            background-image: unset;
        }

        .form-check.color-radio.form-check-solid .form-check-input[type=radio].selected {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 13 11' width='13' height='11' fill='none'%3e%3cpath d='M11.0426 1.02893C11.3258 0.695792 11.8254 0.655283 12.1585 0.938451C12.4917 1.22162 12.5322 1.72124 12.249 2.05437L5.51985 9.97104C5.23224 10.3094 4.72261 10.3451 4.3907 10.05L0.828197 6.88335C0.50141 6.59288 0.471975 6.09249 0.762452 5.7657C1.05293 5.43891 1.55332 5.40948 1.88011 5.69995L4.83765 8.32889L11.0426 1.02893Z' fill='%23FFFFFF'/%3e%3c/svg%3e") !important;
            background-size: 12px;
            background-position: center center;
        }

        .form-check.color-radio.form-check-solid .form-check-input[type=radio].selected.white {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 13 11' width='13' height='11' fill='none'%3e%3cpath d='M11.0426 1.02893C11.3258 0.695792 11.8254 0.655283 12.1585 0.938451C12.4917 1.22162 12.5322 1.72124 12.249 2.05437L5.51985 9.97104C5.23224 10.3094 4.72261 10.3451 4.3907 10.05L0.828197 6.88335C0.50141 6.59288 0.471975 6.09249 0.762452 5.7657C1.05293 5.43891 1.55332 5.40948 1.88011 5.69995L4.83765 8.32889L11.0426 1.02893Z' fill='%23000000'/%3e%3c/svg%3e") !important;
            background-size: 12px;
            background-position: center center;
        }

        .select2-selection>span {
            color: #181c32 !important;
        }

        .bg-red-600 {
            background-color: rgba(220, 38, 38, 1) !important;
        }

        .bg-yellow-600 {
            background-color: rgba(217, 119, 6, 1) !important;
        }

        .bg-blue-600 {
            background-color: rgba(37, 99, 235, 1) !important;
        }
    </style>
    <div class="pt-0 content pt-md-2 d-md-flex flex-md-column-fluid d-block">
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-place="true" data-kt-place-mode="prepend"
                    data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="flex-wrap py-4 mb-5 d-flex align-items-center me-3 mb-lg-0 lh-1">
                    <!--begin::Title-->
                    <h1 class="my-1 d-flex align-items-center fw-bold fs-7"><a href="{{ url()->previous() }}">Back</a>
                    </h1>
                    <!--end::Title-->
                    <span class="mx-4 border-gray-200 h-20px border-start"></span>

                    <ul class="my-1 breadcrumb breadcrumb-separatorless fw-bold fs-7">
                        @foreach ($product->allCategories() as $category)
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <a class="@if ($loop->last) text-dark @else text-muted @endif text-hover-primary"
                                href="{{ route('home', ['category' => $category]) }}">{{ $category }}</a>
                        </li>
                        <!--end::Item-->

                        @if (!$loop->last)
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            /
                        </li>
                        <!--end::Item-->
                        @endif

                        @endforeach
                    </ul>
                </div>
                <!--end::Page title-->
            </div>
        </div>
        <div id="kt_post" class="post d-flex flex-column-fluid mt-md-20">
            <div class="container mt-md-8">
                <div class="mb-5 card mb-xxl-8">
                    <div class="pb-0 card-body pt-9">
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <div id="kt_carousel_1_carousel" class="carousel carousel-custom slide"
                                    data-ride="carousel" data-interval="8000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div
                                                class="overflow-hidden border border-gray-200 rounded position-relative">
                                                @if($primaryImage)
                                                <img width="100%"
                                                    src="{{ route('images', ['image_id' => $primaryImage->id, 'size' => '300']) }}"
                                                    alt="{{ $product->title }}" />
                                                @endif
                                            </div>
                                        </div>
                                        @foreach ($secondaryImages as $image)
                                        <div class="carousel-item">
                                            <div
                                                class="overflow-hidden border border-gray-200 rounded position-relative">
                                                <img width="100%"
                                                    src="{{ route('images', ['size' => 300, 'image_id' => $image->id]) }}"
                                                    alt="{{ $image->alt }}">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="flex-wrap -mt-2 d-flex align-items-center justify-content-center">
                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                            <li data-target="#kt_carousel_1_carousel" data-slide-to="0"
                                                class="ms-1 active"></li>
                                            @for($i = 1; $i<=count($secondaryImages); $i++) <li
                                                data-target="#kt_carousel_1_carousel" data-slide-to="{{ $i }}"
                                                class="ms-1">
                                                </li>
                                                @endfor


                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="flex-wrap mb-2 d-flex justify-content-between align-items-start">
                                    <div class="d-flex flex-column">
                                        <div class="mb-2 d-flex align-items-center">
                                            <h1 class="text-gray-800 fs-2 fw-bolder me-1">{{ $product->title }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-wrap d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="">
                                            <livewire:frontend.products.item-select :product="$product" />
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <div class="overflow-auto d-flex h-55px">
                            <ul
                                class="border-transparent nav nav-stretch nav-line-tabs nav-line-tabs-2x fs-5 fw-bolder flex-nowrap">
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary me-6 active" data-toggle="tab"
                                        href="#description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary me-6" data-toggle="tab"
                                        href="#info">Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mb-5 card mb-xxl-8">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="description">
                                <h5 class='pb-5'>{{ $product->title }}</h5>
                                @if ($product->tags->count() > 0)
                                <div class="mb-5 col-12 mt-lg-0 col-lg">
                                    @foreach ($product->tags as $tag)
                                    <a href="{{ route('home', ['search' => $tag->title]) }}">
                                        <span
                                            class="mt-4 badge badge-light-primary me-4 mt-lg-0">{{ $tag->title }}</span>
                                    </a>
                                    @endforeach
                                </div>
                                @endif


                                <p class="leading-loose text-gray-800 fw-normal">{{ $product->description }}</p>
                            </div>
                            <div class="tab-pane fade" id="info">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed table-row-gray-300 gs-0 gy-4">
                                        <tbody>
                                            <tr>
                                                <th class="fw-bolder text-muted min-w-120px">Manufacturer</th>
                                                <td>{{ $product->manufacturer->title }}</td>
                                            </tr>
                                            @foreach ($product->productAttributes->groupBy('product_attribute_type_id')
                                            as $attributeTypes)
                                            <tr>
                                                <th class="fw-bolder text-muted min-w-120px">
                                                    {{ Illuminate\Support\Str::title($attributeTypes->first()->productAttributeType->title) }}
                                                </th>
                                                <td>{{ $attributeTypes->pluck('value')->implode(', ') }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @if(count($productsTags) > 0)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach($productsTags as $p)
                            <div wire:key='product-{{ $p->id }}' animate-move
                                class="col-sm-3 col-md-3 position-relative">
                                <div class="card-xl-stretch me-md-6">
                                    <div class="d-block overlay">
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{ route('products.show', $p) }}">
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-300px"
                                                style="background-image:url('{{ route('images', ['image_id' => $p->image->id, 'size' => '345']) }}')">
                                            </div>
                                            <div class="bg-opacity-25 overlay-layer card-rounded bg-dark">
                                                <i class="text-white bi bi-eye-fill fs-2x"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mt-3 d-flex flex-column">
                                        <a href="{{ route('products.show', $product) }}"
                                            class="overflow-hidden fs-4 text-dark fw-bolder text-hover-primary lh-base d-block h-50px">{{ $p->title }}</a>
                                        <div class="mt-1 text-gray-600 fw-bold fs-5 text-dark">
                                            {{ $p->formattedCategories() }}</div>
                                        <div class="mt-5 fs-6 fw-bolder d-flex flex-stack">
                                            <span
                                                class="p-2 border-dashed badge badge-white fs-2 fw-bolder text-dark">{{ $p->formattedPriceRange() }}</span>
                                            <a href="{{ route('products.show', $product) }}"
                                                class="btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>

                </div>
                @endif
            </div>
        </div>


    </div>
    @push('scripts')
    <script type="text/javascript">
        $(function() {

            //             	$("[name='size']").on('change',function(){
            //             		var item = ($(this).val()).split("-")[0];


            //             		$("[name='radio_color']").addClass('uncheck');
            //             		$("[name='radio_color']").attr('disabled','disabled');
            //             		$(".colorItem_"+item).removeAttr('disabled');

            //             	});

            $(".colors").on('click', function(e) {

                // 					if($.trim($("#size").val()) == ""){
                // 						e.preventDefault();
                // 						return;
                // 					}

                $(".colors").addClass('uncheck');
                $(this).removeClass('uncheck');
            });

            $(".radio_label").on('click', function(e) {
                var $input = $(this).parent('div').find("input[type='radio']");
                $($input).click();
            });


        });
    </script>
    @endpush
</x-content>
