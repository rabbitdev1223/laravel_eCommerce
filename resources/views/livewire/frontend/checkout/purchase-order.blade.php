<div class="card">
    <div class="pb-0 card-body d-flex justify-content-between align-items-center">
        <h1 class="mb-0 text-dark fw-bolder fs-3">Payment Information</h1>
    </div>
    <div class="card-body">
        <!--begin::Label-->
        <label class="mb-2 fs-5 fw-bold required">Purchase Order #</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input wire:model.debounce.500ms='po' class="form-control form-control-solid @error('po') is-invalid @enderror" placeholder="">
        <!--end::Input-->
        @error('po')

        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
        @enderror
        <button wire:click='createOrder' wire:loading.attr='disabled' class="mt-8 w-100 btn btn-primary"
            {{ $is_po ? '' : 'disabled' }}>Submit Order</button>
    </div>
</div>
