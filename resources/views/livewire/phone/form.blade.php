
<div>
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px" id='kt_modal_new_phone'>
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Form-->
			<form class="form fv-plugins-bootstrap5 fv-plugins-framework" wire:submit.prevent="submit" id="kt_modal_new_phone_form">
				<!--begin::Modal header-->
				<div class="modal-header" id="kt_modal_new_phone_header">
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
						id="kt_modal_new_phone_scroll" data-kt-scroll="true"
						data-kt-scroll-activate="{default: false, lg: true}"
						data-kt-scroll-max-height="auto"
						data-kt-scroll-dependencies="#kt_modal_new_phone_header"
						data-kt-scroll-wrappers="#kt_modal_new_phone_scroll"
						data-kt-scroll-offset="300px" style="max-height: 583px;">
						<!--begin::Input group-->
						<div
							class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container">
							<!--begin::Label-->
							<label class="required fs-5 fw-bold mb-2">Contact Description</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" wire:model='type'
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
							<label class="required fs-5 fw-bold mb-2">Phone Number</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="tel" wire:model='number' class="form-control form-control-solid format_number">
							<!--end::Input-->
							<div class="fv-plugins-message-container invalid-feedback">
								@error('number')
								<span class="error">{{ $message }}</span>
								@enderror
							</div>
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
										 <span class="required">Use as primary phone?</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="This is used for shipping contact" aria-label="This is used for shipping contact"></i>
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
					<button type="button" data-modal='#kt_modal_new_phone' class="btn btn-white me-3 close_modal" data-kt-users-modal-action="cancel">Discard</button>
					<!--end::Button-->
					<!--begin::Button-->
					<button type="submit" id="kt_modal_new_phone_submit"
						class="btn btn-primary">
						<span class="indicator-label">Submit</span> <span
							class="indicator-progress">Please wait... <span
							class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
			
    
			$(function(){

				$('.format_number').on('blur',function(){
					var str = $(this).val();
					
					
					  var cleaned = ('' + str).replace(/\D/g, '');
					  var match = cleaned.match(/^(1|)?(\d{3})(\d{3})(\d{4})$/);
					  
					  if (match) {
					    var intlCode = (match[1] ? '+1 ' : '');
					    var number_formated = intlCode+'('+match[2]+')'+ match[3]+'-'+match[4];
					    
					    @this.set('number', number_formated);
					    
					  }else{
						  @this.set('number', city_id);
					  }
					  
					  
				});

        		$('.remove_phone').on('click',function(e){
    				var phone_id = $(this).attr('data-key');
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
    		            	  window.livewire.emit('deletePhone', phone_id, user_id);

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