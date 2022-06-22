<div class="pe-lg-10">
    <!--begin::Form-->
    <form wire:submit.prevent='saveMessage' class="form fv-plugins-bootstrap5 fv-plugins-framework"
        id="kt_contact_form">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <!--begin::Input group-->
        <div class="mb-5 row">
            <!--begin::Col-->
            <div class="col-md-6 fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="mb-2 fs-5 fw-bold">Name</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input wire:model='name' type="text"
                    class="form-control form-control-solid @error('name') is-invalid @enderror" required autofocus>
                <!--end::Input-->
                @error('name')
                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 fv-row fv-plugins-icon-container">
                <!--end::Label-->
                <label class="mb-2 fs-5 fw-bold">Email</label>
                <!--end::Label-->
                <!--end::Input-->
                <input wire:model='email' type="email"
                    class="form-control form-control-solid @error('email') is-invalid @enderror" required>
                <!--end::Input-->
                @error('email')
                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5 row">
            <!--begin::Col-->
            <div class="col-md-6 fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="mb-2 fs-5 fw-bold">Phone</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input wire:model='phone_number' type="tel"
                    class="form-control form-control-solid @error('phone_number') is-invalid @enderror">
                <!--end::Input-->
                @error('phone_number')
                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 fv-row fv-plugins-icon-container">
                <!--end::Label-->
                <label class="mb-2 fs-5 fw-bold">Subject</label>
                <!--end::Label-->
                <!--end::Input-->
                <input wire:model='subject' type="text"
                    class="form-control form-control-solid @error('subject') is-invalid @enderror">
                <!--end::Input-->
                @error('subject')
                <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-10 d-flex flex-column fv-row fv-plugins-icon-container">
            <label class="mb-2 fs-6 fw-bold">Message</label>
            <textarea wire:model='message'
                class="form-control form-control-solid @error('message') is-invalid @enderror" rows="6"></textarea>
            @error('message')
            <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Submit-->
        <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
            <!--begin::Indicator-->
            <span class="indicator-label">Send Request</span>
            <span class="indicator-progress">Please wait...
                <span class="align-middle spinner-border spinner-border-sm ms-2"></span></span>
            <!--end::Indicator-->
        </button>
        <!--end::Submit-->
        <div></div>
    </form>
    <!--end::Form-->
</div>
