<?php

namespace App\Http\Livewire\Frontend\MyAccount;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAvatar extends Component
{
    use WithFileUploads;

    public $image;

    public $image_id;

    public function mount()
    {
        $this->image_id = auth()->user()->image_id;
    }

    protected $listeners = ['updatedAvatar'];

    public function updatedImage()
    {
        $this->validate(['image' => ['max:1024']]);

        $filename = $this->image->store('avatars');

        $uploadedImage = Image::create([
            'alt' => 'User Profile Image',
            'src' => $filename,
            'imageable_id' => auth()->id(),
            'imageable_type' => 'App\Models\User'
        ]);

        auth()->user()->update([
            'image_id' => $uploadedImage->id
        ]);

        $this->emit('updatedAvatar');

        $this->image_id = auth()->user()->image_id;

        $this->dispatchBrowserEvent('toastr', 'Profile Image Updated');
    }

    public function updatedAvatar()
    {
        $this->image_id = auth()->user()->image_id;
    }

    public function deleteAvatar()
    {
        auth()->user()->update([
            'image_id' => null
        ]);

        $this->image_id = auth()->user()->image_id;
        $this->emit('updatedAvatar');
    }

    public function render()
    {
        return view('livewire.frontend.my-account.edit-avatar');
    }
}
