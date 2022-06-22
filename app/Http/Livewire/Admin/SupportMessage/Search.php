<?php

namespace App\Http\Livewire\Admin\SupportMessage;

use Livewire\Component;

class Search extends Component
{
    public $search;
    public $page;

    protected $listeners = ['searhByMessage'];

    public function mount($page, $search)
    {
        $this->search = $search;
        $this->page = $page;
    }

    public function render()
    {
        return view('livewire.admin.support-message.search');
    }

    public function updatedSearch(){
        if(strlen($this->search) > 0){
            $url = route('admin.support-message.index', ['page'=> 1, 'search' => $this->search]);
        }else{
            $url = route('admin.support-message.index', ['page'=> $this->page]);
        }

        return redirect($url);
    }

    public function searhByMessage(){

        if(strlen($this->search) > 0)
            $url = route('admin.support-message.index', ['page'=> $this->page, 'search' => $this->search]);
        else
            $url = route('admin.support-message.index', ['page'=> $this->page]);


        return redirect($url);
    }

}
