<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Send Order Link</h5>
    </div>
    <div class="modal-body">

    	<div class="row">
          <label>Email<i style="color:red;">*</i></label>
          <input wire:model="email" class="form-control @error('email') is-invalid @enderror" type="email"
                id="send-order-email" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="row">
          <label>Notes</label>
          <textarea wire:model='notes' class="form-control @error('notes') is-invalid @enderror"></textarea>
              @error('notes')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <div class="btn btn-primary" wire:click="sendOrder">Send</div>
    </div>
</div>
