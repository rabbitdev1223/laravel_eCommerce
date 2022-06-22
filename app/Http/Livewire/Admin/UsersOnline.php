<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UsersOnline extends Component
{
    public $users;

    public $user_ids;

    public function mount()
    {
        $this->users = collect();
        $this->user_ids = collect();
    }

    public function getListeners()
    {
        return [
            "echo-presence:presence-admin,here" => 'here',
            "echo-presence:presence-admin,joining" => 'joining',
            "echo-presence:presence-admin,leaving" => 'leaving',
        ];
    }

    public function render()
    {
        return view('livewire.admin.users-online');
    }

    public function here($value)
    {
        $this->user_ids = collect($value)->flatten();

        $this->users = User::whereIn('id', $this->user_ids)->where('id', '!=', auth()->id())->get();
    }

    public function joining($value)
    {
        $this->user_ids->push($value['id']);

        $this->users = User::whereIn('id', $this->user_ids)->where('id', '!=', auth()->id())->get();
    }

    public function leaving($value)
    {
        $this->user_ids = $this->user_ids->filter(function ($user, $key) use ($value) {
            return $user != $value['id'];
        });

        $this->users = User::whereIn('id', $this->user_ids)->where('id', '!=', auth()->id())->get();
    }
}
