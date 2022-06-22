<?php

namespace App\Http\Livewire\Frontend\Home;

use Livewire\Component;

class Search extends Component
{
    public $search;

    protected $queryString = ['search' => ['except' => '']];

    public function render()
    {
        if (request()->has('search')) {
            $this->search = request()->search;
        }

        return view('livewire.frontend.home.search');
    }

    public function updatedSearch()
    {
        $this->emit('searchValue', trim($this->search));
    }
}
