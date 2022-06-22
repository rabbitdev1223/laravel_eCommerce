<div class="mb-5 card mb-xl-10">
    <!--begin::Card header-->
    <div class="border-0 card-header" role="button">
        <!--begin::Card title-->
        <div class="m-0 card-title">
            <h3 class="m-0 fw-bolder">Profile Details</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Input group-->
    <div class="border-top p-9">
        <!--begin::Label-->
        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <livewire:frontend.my-account.edit-avatar />
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Content-->
    <div class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Input group-->
            <div class="mb-6 row">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">Full Name</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                            <input type="text" wire:model.debounce.500ms="first_name" class="mb-3 form-control form-control-lg form-control-solid mb-lg-0" placeholder="First name">
                            @error('first_name')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                            <input type="text" wire:model.debounce.500ms="middle_name" class="mb-3 form-control form-control-lg form-control-solid mb-lg-0" placeholder="Middle name">
                            @error('middle_name')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-4 fv-row fv-plugins-icon-container">
                            <input type="text" wire:model.debounce.500ms="last_name" class="form-control form-control-lg form-control-solid" placeholder="Last name">
                            @error('last_name')
                            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-6 row">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                    <input type="text" wire:model.debounce.500ms="email" class="form-control form-control-lg form-control-solid" placeholder="Email">
                    @error('email')
                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-6 row">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">
                    <span class="">Job</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Job" aria-label="Job"></i>
                </label>
                <div wire:ignore class="col-lg-8">
                    <select wire:model.debounce.500ms='job_id' id="job_select" aria-label="Select a job" data-control="select2" data-placeholder="Select a job..." class="form-select form-select-solid form-select-lg select2-hidden-accessible">
                        <option value="">Select a job...</option>
                        @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->title }}</option>
                        @endforeach
                    </select>
                    @error('job_id')
                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-6 row">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">
                    <span class="">Department</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Department" aria-label="Department"></i>
                </label>
                <div wire:ignore class="col-lg-8 fv-row fv-plugins-icon-container">
                    <select wire:model.debounce.500ms='department_id' id="department_select" aria-label="Select a department" data-control="select2" data-placeholder="Select a department..." class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible">
                        <option value="">Select a department...</option>
                        @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->title }}</option>
                        @endforeach
                    </select>
                    @error('department_id')
                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-6 row">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">
                    <span class="">Location</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Location" aria-label="Location"></i>
                </label>
                <div wire:ignore class="col-lg-8 fv-row fv-plugins-icon-container">
                    <select wire:model.debounce.500ms='location_id' id="location_select" aria-label="Select a location" data-control="select2" data-placeholder="Select a location..." class="form-select form-select-solid form-select-lg fw-bold select2-hidden-accessible">
                        <option value="">Select a location...</option>
                        @foreach ($locations as $location)
                        <option value="{{ $location->id }}">
                            {{ $location->city->title.', '.$location->city->state->code.' ('.$location->code.')' }}
                        </option>
                        @endforeach
                    </select>
                    @error('location_id')
                    <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-6 row">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-bold fs-6">
                    <span class="">Address</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Address" aria-label="Address"></i>
                </label>
                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                    <div class="pb-4 text-end">
                        <button wire:click="addNewAddress" type="button" class="btn btn-light-primary me-auto" id="kt_create_new_custom_fields_add">Add new address</button>
                    </div>
                    <div id="kt_create_new_payment_method">
                        @foreach ($addresses as $key => $address)
                        <div wire:key="{{ $address['id'] }}">
                            <!--end::Option-->
                            <div class="separator separator-dashed"></div>
                            <!--begin::Option-->
                            <div class="py-1">
                                <!--begin::Header-->
                                <div class="py-3 d-flex flex-stack flex-wrap">
                                    <!--begin::Toggle-->
                                    <div wire:click="collapseClickHandler({{ $key }})" class="w-100 d-flex align-items-center collapsible toggle @if($address['collapsed']) collapsed @endif" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_{{ $key }}">
                                        <!--begin::Arrow-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                            <!--begin::Svg Icon | path: icons/duotone/Interface/Minus-Square.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.25" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A" />
                                                    <path d="M8 13C7.44772 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8Z" fill="#12131A" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotone/Interface/Plus-Square.svg-->
                                            <span class="svg-icon toggle-off svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd" d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z" fill="#12131A" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z" fill="#12131A" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Arrow-->
                                        <!--begin::Summary-->
                                        <div class="me-3">
                                            <div class="d-flex align-items-center fw-bolder">{{ $address['type'] }}
                                                @if ($address['is_primary'])
                                                <div class="badge badge-light-primary ms-5">Default</div>
                                                @endif
                                                @if ($address['companyAddress'])<div class="badge badge-light-success ms-3">{{ $address['companyAddress'] }}</div>@endif
                                            </div>
                                            <div class="text-gray-400">{{ ($address['address']!=null && trim($address['address'])? ($address['address'] . ', ') : '') . ($address['address_2']!=null && trim($address['address_2'])? ($address['address_2'] . ', ') : '') . $address['city_title'] . ' ' . $address['state_code'] . ' ' . $address['zipcode'] }}</div>
                                        </div>
                                        <!--end::Summary-->


                                        <!--begin::Input-->
                                        <div class="d-flex my-3 ms-auto flex-column flex-sm-row align-items-center">
                                            <!--begin::Radio-->
                                            <label class="form-check form-check-custom form-check-solid me-0 me-sm-5" data-bs-toggle="tooltip" title="" data-bs-original-title="Set default" aria-label="Set default">
                                                <input @if($address['is_primary']) checked @endif wire:click="primaryRadioClickHandler({{ $key }})" class="form-check-input" type="radio" />
                                            </label>

                                            <!--begin::Delete-->
                                            <a wire:click.prevent="deleteAddress({{ $key }})" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm mt-2 mt-sm-0" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--end::Delete-->
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Toggle-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div id="kt_create_new_payment_method_{{ $key }}" class="collapse @if(!$address['collapsed']) show @endif fs-6 ps-0 ps-sm-10 py-2">
                                    <!--begin::Row-->
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <div class="d-flex fv-row align-items-center">
                                                <div class="required text-gray-400 fw-bold w-125px">Name</div>
                                                <input wire:model.debounce.500ms="addresses.{{ $key }}.type" type="text" class="form-control form-control-lg form-control-solid" placeholder="Address name">
                                            </div>
                                            <div class="d-flex fv-row align-items-center mb-3">
                                                <div class="w-125px"></div>
                                                @error('addresses.' . $key . '.type')
                                                <div class="mt-2 fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="required text-gray-400 fw-bold w-125px">Address 1</div>
                                                <input wire:model.debounce.500ms="addresses.{{ $key }}.address" type="text" class="form-control form-control-lg form-control-solid" placeholder="Address Line 1">
                                            </div>
                                            <div class="d-flex fv-row align-items-center mb-3">
                                                <div class="w-125px"></div>
                                                @error('addresses.' . $key . '.address')
                                                <div class="mt-2 fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="text-gray-400 fw-bold w-125px">Address 2</div>
                                                <input wire:model.debounce.500ms="addresses.{{ $key }}.address_2" type="text" class="form-control form-control-lg form-control-solid" placeholder="Address Line 2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="required text-gray-400 fw-bold w-125px">State</div>
                                                <select wire:model="addresses.{{ $key }}.state_id" class="form-select form-select-solid form-select-lg" aria-label="Select a state" data-placeholder="Select a state...">
                                                    <option value="">Select a state</option>
                                                    @foreach ($states as $state)
                                                    <option value="{{ $state['id'] }}">{{ $state['title'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="required text-gray-400 fw-bold w-125px">City</div>
                                                <livewire:frontend.my-account.select-cities :key="$address['id']" :stateId="$address['state_id']" :addressId="$address['id']" :cityId="$address['city_id']" />
                                            </div>
                                            <div class="d-flex fv-row align-items-center mb-3">
                                                <div class="w-125px"></div>
                                                @error('addresses.' . $key . '.city_id')
                                                <div class="mt-2 fv-plugins-message-container invalid-feedback">{{ $address['state_id'] ? $message : "Select a state first." }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="required text-gray-400 fw-bold w-125px">Zipcode</div>
                                                <input wire:model.debounce.500ms="addresses.{{ $key }}.zipcode" type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter a zipcode">
                                            </div>
                                            <div class="d-flex fv-row align-items-center mb-3">
                                                <div class="w-125px"></div>
                                                @error('addresses.' . $key . '.zipcode')
                                                <div class="mt-2 fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Option-->
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Card body-->
        <!--begin::Actions-->
        <div class="py-6 card-footer d-flex justify-content-end px-9">
            <button type="reset" wire:click.prevent='discard' {{ $hasChanged ? '' : 'disabled' }} class="btn btn-white btn-active-light-primary me-2">Discard</button>
            <button type="submit" wire:click.prevent='save' {{ $hasChanged ? '' : 'disabled' }} class="btn btn-primary">Save
                Changes</button>
        </div>
    </div>
    <!--end::Content-->
</div>
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#job_select').select2();
        $('#job_select').on('change', function(e) {
            var data = $('#job_select').select2("val");
            @this.set('job_id', data);
        });

        $('#department_select').select2();
        $('#department_select').on('change', function(e) {
            var data = $('#department_select').select2("val");
            @this.set('department_id', data);
        });

        $('#location_select').select2();
        $('#location_select').on('change', function(e) {
            var data = $('#location_select').select2("val");
            @this.set('location_id', data);
        });
    });
</script>
@endpush
