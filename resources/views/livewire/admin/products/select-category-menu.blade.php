<div class="relative" style="position:relative;">
    <!--begin::Menu-->
    <a href="#" id="category-menu-btn" class="category-menu-btn show btn btn-sm btn-flex btn-light fw-bolder">
        <span>{{ $selectedSortedCategoryTitle }}</span>
        <!--begin::Svg Icon | path: assets/media/icons/duotone/Navigation/Angle-down.svg-->
        <span class="svg-icon svg-icon-muted m-0"><svg style="width:18px;height:18px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999) " />
                </g>
            </svg></span>
        <!--end::Svg Icon-->
    </a>
    <!--begin::Menu 1-->
    <div class="category-menu menu menu-sub menu-sub-dropdown pt-2">
        <!--begin::Form-->
        @foreach ( $sortedCategories as $key=>$sortedCategory )
        <div wire:click="menuItemClick({{ $sortedCategory['id'] }},'{{ $sortedCategory['title'] }}')" class="menu-item menu-accordion">
            <span class="menu-link" style="padding: 4px 18px;">
                <span class="menu-title">
                    @for ($i=1; $i<count(explode('-', $sortedCategory['sortKey']));$i++) &nbsp;&nbsp;&nbsp;&nbsp; @endfor
                    @if(count(explode('-', $sortedCategory['sortKey']))==2)
                        <span class="bullet bullet-vertical me-3"></span>
                    @endif
                    @if(count(explode('-', $sortedCategory['sortKey']))==3)
                        <span class="bullet bullet-dot me-3"></span>
                    @endif
                    @if(count(explode('-', $sortedCategory['sortKey']))==4)
                        <span class="bullet bullet-line me-3"></span>
                    @endif

                    @if(count(explode('-', $sortedCategory['sortKey']))==1)
                    <span class="text-gray-700 fw-bolder fs-5 cursor-pointer mb-0">
                        {{$sortedCategory['title']}}</span>
                    @else
                        <span class="text-gray-800 fs-6">
                            {{$sortedCategory['title']}}
                        </span>
                    @endif
                </span>
            </span>
        </div>
        @endforeach
        <!--end::Form-->
    </div>
    <!--end::Menu-->

    <style>
        .category-menu {
            position: absolute !important;
            width: 100% !important;
            border-radius: 0px;
            border: 1px solid #666;
            max-height: 350px;
            overflow: auto;
        }

        .category-menu-btn {
            padding: .75rem 12px .75rem 18px!important;
            border: 1px solid #e4e6ef !important;
            background-color: #fff !important;
            color: #181c32 !important;
            font-size: 1.1rem;
            font-weight: 500 !important;
            line-height: 1.5;
            width: 100%;
            display: flex;
            justify-content: space-between;
            height: 42.5px;
        }

        .category-menu-btn:focus {
            border-color: #b5b5c3 !important;
            outline: 0 !important;
        }

        .menu-item:hover {
            background-color: #009ef7;
            color: white;
        }
        .menu-item:hover span {
            color:white!important;
        }
    </style>
</div>


@push('scripts')
<script type="text/javascript">
    $('a#category-menu-btn').on('click', function(e) {
        e.stopPropagation();
        if ($('.category-menu').css('display') == "none") {
            $('.category-menu').css("display", "block");
        } else {
            $('.category-menu').css("display", "none");
        }
    });
    $(document).on("click", function(event) {
        $('.category-menu').css("display", "none");
    });
</script>
@endpush
