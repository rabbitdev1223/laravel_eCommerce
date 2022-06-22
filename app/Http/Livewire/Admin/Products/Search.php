<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;

class Search extends Component
{
    public $search;
    public $page;

    protected $listeners = ['searhByUser'];

    public function mount($page, $search)
    {
        $this->search = $search;
        $this->page = $page;
    }

    public function render()
    {
        return view('livewire.admin.products.search');
    }

    public function updatedSearch(){
        if(strlen($this->search) > 0){
            $url = route('admin.products.index', ['page'=> 1, 'search' => $this->search]);
        }else{
            $url = route('admin.products.index', ['page'=> $this->page]);
        }

        return redirect($url);
    }

    public function searhByUser(){

        if(strlen($this->search) > 0)
            $url = route('admin.products.index', ['page'=> $this->page, 'search' => $this->search]);
        else
            $url = route('admin.products.index', ['page'=> $this->page]);


        return redirect($url);
    }

}
