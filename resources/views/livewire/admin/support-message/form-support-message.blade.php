<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
    <!--begin::Form-->

    <div class="row mb-6">
        <div class="col-md-6 fv-row fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2">Name</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input wire:model="name" type="text" class="form-control form-control-solid" placeholder="" disabled>
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="col-md-6 fv-row fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2">Email</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input wire:model="email" type="text" class="form-control form-control-solid" placeholder="" disabled>
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
    </div>
    <div class="mb-6 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="fs-6 fw-bold mb-2">Subject</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input wire:model="subject" type="text" class="form-control form-control-solid" placeholder="" disabled>
        <!--end::Input-->
        <div class="fv-plugins-message-container invalid-feedback"></div>
    </div>
    <div class="mb-6 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="fs-6 fw-bold mb-2">Phone Number</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input wire:model="phone_number" type="text" class="form-control form-control-solid" placeholder="" disabled>
        <!--end::Input-->
        <div class="fv-plugins-message-container invalid-feedback"></div>
    </div>
    <div class="fv-row mb-6">
        <!--begin::Label-->
        <label class="fs-6 fw-bold mb-2">Message</label>
        <!--end::Label-->
        <!--begin::Label-->
        <textarea wire:model="message" class="form-control form-control-solid" rows="3" placeholder="" disabled></textarea>
        <!--end::Label-->
    </div>
    <div class="fv-row mb-15 fv-plugins-icon-container">
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack">
            <!--begin::Label-->
            <div class="me-5">
                <label class="fs-6 fw-bold">Email Sent?</label>
                <div class="fs-7 fw-bold text-gray-400">Email has been sent.</div>
            </div>
            <!--end::Label-->
            <!--begin::Checkboxes-->
            <div class="d-flex">
                @if ($email_sent)
                <span class="badge badge-light-success">
                    <span class="svg-icon svg-icon-3 svg-icon-success me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002)"></path>
                                <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002)"></path>
                            </g>
                        </svg>
                    </span>
                    Sent
                </span>
                @else
                <span class="badge badge-light text-muted d-flex align-items-center">Not Yet</span>
                @endif
            </div>
            <!--end::Checkboxes-->
        </div>
        <!--begin::Wrapper-->
        <div class="fv-plugins-message-container invalid-feedback"></div>
    </div>
    <div class="d-flex flex-stack">
        <button type="button" class="btn btn-lg btn-primary close_modal" data-kt-messages-modal-action="close">
            <span class="indicator-label">Close</span>
        </button>
    </div>
    <!--end::Form-->
    @push('scripts')
    <script type="text/javascript">
        $(".close_modal").on('click', function(e) {
            $('#kt_modal_view_message').modal('hide');

        });

        $(".view_message").on('click', function(e) {
            var id = $(this).parents('tr').attr('data-key');
            Livewire.emit('toggleMessage', id);
        });
    </script>
    @endpush
</div>
