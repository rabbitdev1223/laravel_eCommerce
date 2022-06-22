
<div>
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Form-->
			<form class="form fv-plugins-bootstrap5 fv-plugins-framework" @if($action) method="POST" action="{{ $action }}" @else wire:submit.prevent="submit" @endif id="kt_modal_new_address_form">
				<span>
            		@csrf
            	</span> 
				<!--begin::Modal header-->
				<div class="modal-header" id="kt_modal_new_address_header">
					<!--begin::Modal title-->
					<h2>{{ $title }}</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary"
						data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
						<span class="svg-icon svg-icon-1"> <svg
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
								height="24px" viewBox="0 0 24 24" version="1.1">
								<g
									transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
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
				<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
					<!--begin::Scroll-->
					<div class="d-flex flex-column scroll-y me-n7 pe-7"
						id="kt_modal_new_address_scroll" data-kt-scroll="true"
						data-kt-scroll-activate="{default: false, lg: true}"
						data-kt-scroll-max-height="auto"
						data-kt-scroll-dependencies="#kt_modal_new_address_header"
						data-kt-scroll-wrappers="#kt_modal_new_address_scroll"
						data-kt-scroll-offset="300px" style="max-height: 583px;">


						<!--begin::Input group-->
						<div
							class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
							<!--begin::Label-->
							<label class="required fs-5 fw-bold mb-2">Address Description</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input name='type' type="text" wire:model='type'
								class="form-control form-control-solid">
							<!--end::Input-->
							<div class="fv-plugins-message-container invalid-feedback">
								@error('type')
								<span class="error">{{ $message }}</span>
								@enderror
							</div>
						</div>
						<!--end::Input group-->

						<!--begin::Input group-->
						<div
							class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
							<!--begin::Label-->
							<label class="required fs-5 fw-bold mb-2">Address</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input name='address' type="text" wire:model='address'
								class="form-control form-control-solid">
							<!--end::Input-->
							<div class="fv-plugins-message-container invalid-feedback">
								@error('address')
								<span class="error">{{ $message }}</span>
								@enderror
							</div>
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div
							class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
							<!--begin::Label-->
							<label class="fs-5 fw-bold mb-2">Address Line 2</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input name='address2' type="text" wire:model='address2'
								class="form-control form-control-solid">
							<!--end::Input-->
							<div class="fv-plugins-message-container invalid-feedback">
								@error('address2')
								<span class="error">{{ $message }}</span>
								@enderror
							</div>
						</div>
						<!--end::Input group-->
				
				        <!--begin::Input group-->
						<div class="row g-9 mb-5">
							<!--begin::Col-->
							<div class="col-md-6 fv-row fv-plugins-icon-container">
								 <!--begin::Label-->
                        		<label class="col-lg-4 col-form-label fw-bold fs-6 required">state </label>
                                <div wire:ignore class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <select name='state' wire:model.debounce.500ms='stateId' id='stateId' data-dropdown-parent="#kt_modal_new_address_form" aria-label="Select a State" data-control="select2" data-placeholder="Select a State..."  class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible">
                                        <option value="">Select a State...</option>
                                        @foreach($states as $s)
                                        	<option @if($stateId == $s->id) selected="selected" @endif value="{{ $s->id }}">{{ $s->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('stateId')
                                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!--end::Col-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-md-6 fv-row fv-plugins-icon-container">
								<!--begin::Label-->
								<label class="fs-5 fw-bold mb-2 pt-5 required">Post Code</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name='zipcode' type="text" wire:model='zipcode'
									class="form-control form-control-solid">
								<!--end::Input-->
								<div class="fv-plugins-message-container invalid-feedback">
									@error('zipcode')
									<span class="error">{{ $message }}</span>
									@enderror
								</div>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
							 <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">City</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Please chose state first" aria-label="Please chose state first"></i>
                            </label>
                            <div wire:ignore class="col-lg-12 fv-row fv-plugins-icon-container">
                                <select name='city' wire:model.debounce.500ms='city_id' id='city_id' data-dropdown-parent="#kt_modal_new_address_form" aria-label="Select a City" data-control="select2" data-placeholder="Select a City..."   class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible">
                                    <option value="">Select a City...</option>
                                    @foreach($cities as $c)
                                    	<option @if($city_id == $c['id']) selected="selected" @endif value="{{ $c['id'] }}">{{ $c['title'] }}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Col-->
						</div>
						<!--end::Input group-->
						
						<!--begin::Input group-->
						<div class="fv-row mb-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack">
								<!--begin::Label-->
								<div class="me-5">
									<!--begin::Label-->
									<label class="fs-5 fw-bold">
										 <span class="required">Use as primary address?</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="This is used for shipping address" aria-label="This is used for shipping address"></i>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<div class="fs-7 fw-bold text-gray-400"></div>
									<!--end::Input-->
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label
									class="form-check form-switch form-check-custom form-check-solid">
									<!--begin::Input--> 
									<input class="form-check-input" wire:model='is_primary' type="checkbox" value="1" @if($is_primary) checked="checked" @endif> <!--end::Input-->
									<!--begin::Label--> <span
									class="form-check-label fw-bold text-gray-400">Yes</span> <!--end::Label-->
								</label>
								<!--end::Switch-->
							</div>
							<!--begin::Wrapper-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Scroll-->
				</div>
				<!--end::Modal body-->
				<!--begin::Modal footer-->
				<div class="modal-footer flex-center">
					<!--begin::Button-->
					<button type="button" data-modal='#kt_modal_new_address' class="btn btn-white me-3 close_modal" data-kt-users-modal-action="cancel">Discard</button>
					<!--end::Button-->
					<!--begin::Button-->
					<button @if($action) onclick="$(this).parents('form').submit();" @endif type="submit" class="btn btn-primary">
						<span class="indicator-label">Submit</span> 
					</button>
					<!--end::Button-->
				</div>
				<!--end::Modal footer-->
				<div></div>
			</form>
			<!--end::Form-->
		</div>
	</div>
	
	 <!--end::Form-->
   	@push('scripts')
        <script type="text/javascript">
			function loadCityByState(){
				var cities = @this.cities;

				$('#city_id').find('option').remove();
				var options = [];
				options[0] = new Option('Select a City...', null);
				
				$.each(cities , function(index, val) { 
					 options[index+1] = new Option(val.title, val.id);
				});

				var city_id = @this.city_id;
				
				$('#city_id').append(options);
				if(city_id)
					$('#city_id').val(city_id);
				$('#city_id').trigger('change.select2'); 
			}
    
			$(function(){
				
    			$('#kt_modal_new_address').on('shown.bs.modal', function() { 
        			var state_id = @this.stateId;
    				 $('#stateId').val(state_id);
    				 $('#stateId').trigger('change.select2'); 

    				 var city_id = @this.city_id;
    				 
    				 if(city_id){
    					 loadCityByState();
    				 } 
    				 
			    }) ;

        		$('#city_id').select2(); 
    		  	$('#city_id').on('change', function (e) {
      		            var city_id = $('#city_id').select2("val");
      		            @this.set('city_id', city_id);
    	        });
 			    
    			$('#stateId').select2();
		        $('#stateId').on('change', function (e) {
		        	$('#city_id').find('option').remove();
		        	$('#city_id').append(new Option('Select a City...', null));
	        	 	$('#city_id').trigger('change.select2'); 	        
		            var data = $('#stateId').select2("val");
		            @this.set('stateId', data);
		            
		            setTimeout(function(){
		            	loadCityByState();						
	            	  }, 500);
		            
		        });
    			
        		$('.remove_address').on('click',function(e){
    				var address_id = $(this).attr('data-key');
    				var user_id = $(this).attr('data-user');
    				
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
    		            	  window.livewire.emit('deleteAddress', address_id, user_id);

    		            	  setTimeout(function(){
    		            		  location.reload();
        		            	  }, 800);
    		              } else if (result.dismiss === "cancel") {
    		                  Swal.fire(
    		                      "Cancelled",
    		                      "Your action has been canceled",
    		                      "error"
    		                  )
    		              }
    		          });

    						
            	});

    		});
    	</script>
	@endpush
	
</div>