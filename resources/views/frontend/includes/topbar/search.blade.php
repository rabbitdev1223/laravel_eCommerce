@if(request()->has('category') && request()->input('category','') != '')
	<?php 

	   

$resultCategoryIds = collect();
	   $tempCategory = App\Models\ProductType::where('title', '=', request()->category)->get();
	   
	   foreach ($tempCategory as $c) {
	       
	       if(!$resultCategoryIds->contains($c->id)){
	           $resultCategoryIds->push($c->id);
	       }
	       
	       $tempChild = $c->productType();
	       
	       if($tempChild ){
	           if(!$resultCategoryIds->contains($tempChild->id))
	               $resultCategoryIds->push($tempChild->id);
	       
    	       $tempCategory2 = $tempChild->productType();
    	       if($tempCategory2 && !$resultCategoryIds->contains($tempCategory2->id)){
    	           $resultCategoryIds->push($tempCategory2->id);
    	       }
	       }
	           
	   }
	   
	   $categories = App\Models\ProductType::whereIn('id', $resultCategoryIds)->get();
	   
	   foreach ($categories as $category){
	       $tempC = App\Models\ProductType::where('product_type_id', $category->id)->get();
	       
	       foreach ($tempC as $c) {
	           
	           if(!$resultCategoryIds->contains($c->id)){
	               $resultCategoryIds->push($c->id);
	           }
	           
	           $tempChild = $c->productType();
	           
	           if($tempChild ){
	               if(!$resultCategoryIds->contains($tempChild->id))
	                   $resultCategoryIds->push($tempChild->id);
	                   
	                   $tempCategory2 = $tempChild->productType();
	                   if($tempCategory2 && !$resultCategoryIds->contains($tempCategory2->id)){
	                       $resultCategoryIds->push($tempCategory2->id);
	                       
	                       $tempCategory3 = $tempCategory2->productType();
	                       if($tempCategory3 && !$resultCategoryIds->contains($tempCategory3->id)){
	                           $resultCategoryIds->push($tempCategory3->id);
	                           
	                           $tempCategory4 = $tempCategory3->productType();
	                           if($tempCategory4 && !$resultCategoryIds->contains($tempCategory4->id)){
	                               $resultCategoryIds->push($tempCategory4->id);
	                           }
	                           
	                       }
	                       
	                   }
	           }
	           
	       }
	       
	       
	       
	   }
	   
	   $categories = App\Models\ProductType::whereIn('id', $resultCategoryIds)->where(function($join){
// 	       $join->WhereExists(function($query){
// 	           $query->select(Illuminate\Support\Facades\DB::raw(1))
// 	           ->from('products')
// 	           ->whereRaw('products.product_type_id = product_types.id');
// 	       });
	   })->get();
	
    ?>
	<div class="toolbar mb-30" id="kt_toolbar">
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
                    @foreach ($categories as $category)
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <a class="@if ($category->title == request()->category) text-dark @else text-muted @endif text-hover-primary" href="{{ route('home', ['category' => $category->title]) }}">{{ $category->title }}</a>
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
    @push('scripts')
    	<script>$(function(){$('#kt_content_container').css('padding-top','2%');});</script>
    @endpush
    
@endif
           
<div class="d-flex align-items-stretch ms-1 ms-lg-3">
    <!--begin::Search-->
    <div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true"
        data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu"
        data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true"
        data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
        <!--begin::Search toggle-->
        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
            <div class="btn btn-icon btn-active-light-primary">
                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                <span class="svg-icon svg-icon-1">
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
            </div>
        </div>
        <!--end::Search toggle-->
        <!--begin::Menu-->
        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
            <!--begin::Wrapper-->
            <livewire:frontend.home.search />
            <!--end::Wrapper-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Search-->
</div>
