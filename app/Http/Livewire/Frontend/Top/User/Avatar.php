<?php

namespace App\Http\Livewire\Frontend\Top\User;

use Livewire\Component;

class Avatar extends Component
{
    public $image_id;

    protected $listeners = ['updatedAvatar'];

    public function mount()
    {
        $this->image_id = auth()->user()->image_id;
    }


    public function render()
    {
        return view('livewire.frontend.top.user.avatar');
    }

    public function updatedAvatar()
    {
        $this->image_id = auth()->user()->image_id;
    }
}
