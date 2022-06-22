<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
    <!--begin::Form-->
    <form wire:submit.prevent="submit" enctype="multipart/form-data" id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework">
        <!--begin::Scroll-->
        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 583px;">
           <div style='padding-left: 10px;'>
           
           
            <!--begin::Input group-->
            <div class="mb-7">
                <!--begin::Label-->
                <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                <!--end::Label-->
                <!--begin::Image input-->
                <div class="image-input image-input-outline @if($image_id == null || $avatar_remove) image-input-empty @endif" data-kt-image-input="true" style="background-image: url({{ asset('assets/media/avatars/blank.png') }})">
                    <!--begin::Preview existing avatar-->
                    
                    <div class="image-input-wrapper w-125px h-125px " @if($image_id != null && $avatar_remove == false ) style="background-image: url({{ route('images', ['type' => 'avatars', 'size' => 150, 'image_id' => $image_id]) }})" @else style="background-image: none;" @endif ></div>
                    <!--end::Preview existing avatar-->
                    
                    <!--begin::Label-->
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <!--begin::Inputs-->
                        <input type="file" wire:model='avatar'>
                        <input type="hidden" name="avatar_remove">
                        <!--end::Inputs-->
                    </label>
                    <!--end::Label-->
                    <!--begin::Cancel-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Cancel-->
                    <!--begin::Remove-->
                    
                    <span wire:click='removeAvatar();' class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-original-title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    
                    <!--end::Remove-->
                    @error('avatar')<span class="error">{{ $message }}</span> @enderror
                </div>
                <!--end::Image input-->
                <!--begin::Hint-->
                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                <!--end::Hint-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">First Name</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" wire:model='first_name' class="form-control form-control-solid mb-3 mb-lg-0" placeholder="First Name">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback">@error('first_name')<span class="error">{{ $message }}</span> @enderror</div>
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Middle Name</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" wire:model='middle_name' class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Middle Name">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback">@error('middle_name')<span class="error">{{ $message }}</span> @enderror</div>
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Last Name</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" wire:model='last_name' class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Last Name">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback">@error('last_name')<span class="error">{{ $message }}</span> @enderror</div>
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="email" wire:model='email' class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" >
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback">@error('email')<span class="error">{{ $message }}</span> @enderror</div>
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Job</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select wire:model='job_id' class='form-control form-control-solid mb-3 mb-lg-0'>
                	<option value=''>...</option>
                	@foreach($jobs as $key => $job)
                		<option value="{{ $key }}">{{ $job }}</option>
                	@endforeach
                </select>
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback">@error('job_id')<span class="error">{{ $message }}</span> @enderror</div>
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Departament</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select wire:model='department_id' class='form-control form-control-solid mb-3 mb-lg-0'>
                	<option value=''>...</option>
                	@foreach($departaments as $key => $departament)
                		<option value="{{ $key }}">{{ $departament }}</option>
                	@endforeach
                </select>
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback">@error('department_id')<span class="error">{{ $message }}</span> @enderror</div>
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-2">Location</label>
                <!--end::Label-->
                <!--begin::Input-->
                
                
                <select wire:model='location_id' class='form-control form-control-solid mb-3 mb-lg-0'>
                	<option value=''>...</option>
                	@foreach($locations as $location)
                		@php
                			if(!$location->addresses || count($location->addresses) <=0){
                				continue;
            				}
            				
            				$address = $location->addresses->first();
                		@endphp
                		<option value="{{ $location->id }}">{{ $address->address }}, {{ $address->city->title }} - {{ $address->city->state->code }}, {{ $address->zipcode }}</option>
                	@endforeach
                </select>
                
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback">@error('location_id')<span class="error">{{ $message }}</span> @enderror</div>
            </div>
            <!--end::Input group-->
            
            <!--begin::Input group-->
            <div class="mb-7">
                <!--begin::Label-->
                <label class="required fw-bold fs-6 mb-5">Role</label>
                <!--end::Label-->
                <!--begin::Roles-->
                <!--begin::Input row-->
            	@forelse($roles_for_users as $index => $role)
            		
            	   <div class="d-flex fv-row">
                        <!--begin::Radio-->
                        <div class="form-check form-check-custom form-check-solid">
                            <!--begin::Input-->
                           
                            <input wire:model="role_selected" type="radio" value='{{ $role }}' id='role_name_{{ $role }}' class="form-check-input me-3 role_name" >
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for='role_name_{{ $role }}'>
                                <div class="fw-bolder text-gray-800">{{ ucfirst($role) }}</div>
                                <div class="text-gray-600"></div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::Radio-->
                    </div>
                    <!--end::Input row-->
                    <div class="separator separator-dashed my-5"></div>
                 @empty   
            	@endforelse
            </div>
            <!--end::Input group-->
            </div>
        </div>
        <!--end::Scroll-->
        
        <!--begin::Actions-->
        <div class="text-center pt-15">
            <button type="button" data-modal='#kt_modal_add_user' class="btn btn-white me-3 close_modal" data-kt-users-modal-action="cancel">Discard</button>
            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
        <!--end::Actions-->
        <div></div>
    </form>
    <!--end::Form-->
   	@push('scripts')
        <script type="text/javascript">
    		   
            $(".btnNewUser").on('click',function(e){
            	$('#title_modal').html('Add User');
            });  
        	
            $(".edit_user").on('click',function(e){
            	var id = $(this).parents('tr').attr('data-key');
            	$('#title_modal').html('Modify User('+id+')');
            	Livewire.emit('toggleUser', id);
            	$('#kt_modal_add_user').modal('show');  
        	});

			$('.btn_remove').on('click',function(e){
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
		            	  window.livewire.emit('deleteUser', id);

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

    	</script>
	@endpush
</div>