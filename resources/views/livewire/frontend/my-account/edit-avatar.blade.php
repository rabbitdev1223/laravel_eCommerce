<div>
    <div class="image-input image-input-outline" style="background-image: url(assets/media/avatars/blank.png)">
        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{  route('images', ['size'=>125, 'image_id'=>$image_id, 'type'=>'avatar']) }})"></div>
        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
            <i class="bi bi-pencil-fill fs-7"></i>
            <input wire:model='image' type="file" name="avatar" accept=".png, .jpg, .jpeg">
            <input type="hidden" name="avatar_remove">
        </label>
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
            <i class="bi bi-x fs-2"></i>
        </span>
        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" wire:click.ignore='deleteAvatar' data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
            <i class="bi bi-x fs-2"></i>
        </span>
    </div>
    <div class="form-text">Allowed file types: png, jpg, jpeg. Max file siz: 1024Kb</div>
    @error('image')
    {{ $this->dispatchBrowserEvent('toastr-error', $message) }}
    {{ $this->resetErrorBag(['image']) }}
    @enderror
</div>
