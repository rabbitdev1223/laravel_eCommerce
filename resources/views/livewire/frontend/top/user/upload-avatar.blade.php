<div>
    <input wire:model='image' type="file" id="upload-avatar-icon" class='d-none' />
    <!--begin::Avatar-->
    <label for="upload-avatar-icon" style="cursor:pointer;">
        <div class="symbol symbol-50px me-5">
            <img alt="User Profile Image"
                src="{{  route('images', ['size'=>50, 'image_id'=>$image_id, 'type'=>'avatar']) }}"
                data-image-id="{{ $image_id }}" />
        </div>
    </label>
    <!--end::Avatar-->
</div>
