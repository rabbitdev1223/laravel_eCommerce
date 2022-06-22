<div class="card">
    <div class="pb-0 card-body d-flex justify-content-between align-items-center">
        <h1 class="mb-0 text-dark fw-bolder fs-3">Delivery Address</h1>
    </div>
    <div class="card-body">
        <select wire:model='location' class="form-select form-select-solid" aria-label="Select example">
            <option>Select Evans Location</option>
            @foreach ($locations as $location)
            <option value="{{ $location->id }}">{{ $location->city->title }}, {{ $location->city->state->code }}
                ({{ $location->addressable->code }})
            </option>
            @endforeach
        </select>
        <div class="my-4 d-flex justify-content-center">OR</div>
        <div class="me-n7 pe-7">

            <!--begin::Input group-->
            <div class="mb-5 d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="mb-2 required fs-5 fw-bold">Address Line 1</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input wire:model.debounce.500ms='address'
                    class="form-control form-control-solid @error('address') is-invalid @enderror" placeholder="">
                <!--end::Input-->
                @error('address')

                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-5 d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="mb-2 fs-5 fw-bold">Address Line 2</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input wire:model.debounce.500ms='address_2'
                    class="form-control form-control-solid @error('address_2') is-invalid @enderror" placeholder="">
                <!--end::Input-->
                @error('address_2')

                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-5 d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="mb-2 fs-5 fw-bold required">State</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select wire:model.debounce.500ms='state'
                    class="form-select form-select-solid @error('state') is-invalid @enderror"
                    aria-label="Select example">
                    <option>Select State</option>
                    @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->title }}</option>
                    @endforeach
                </select>
                <!--end::Input-->
                @error('state')

                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-5 d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="mb-2 fs-5 fw-bold required">City</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select wire:model='city' class="form-select form-select-solid @error('city') is-invalid @enderror"
                    aria-label="Select example">
                    @if ($cities->count() == 0)
                    <option value="">Select State First</option>
                    @endif
                    @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->title }}</option>
                    @endforeach
                </select>
                <!--end::Input-->
                @error('city')

                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="mb-2 fs-5 fw-bold required">Zipcode</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input wire:model.debounce.500ms='zipcode'
                    class="form-control form-control-solid @error('zipcode') is-invalid @enderror" placeholder="">
                <!--end::Input-->
                @error('zipcode')

                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Input group-->
        </div>
    </div>
</div>
