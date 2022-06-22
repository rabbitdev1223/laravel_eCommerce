<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class Search extends Component
{
    public $search;
    public $page;
    public $column;
    public $is_asc;
    
    protected $listeners = ['searhByUser','columnSorteBy'];
    
    public function mount($page, $search, $column = 'user', $is_asc = 'ASC')
    {
        $this->search = $search;
        $this->page = $page;
        $this->column = $column;
        $this->is_asc = $is_asc;
    }
    
    public function render()
    {
        return view('livewire.admin.users.search');
    }
    
    public function updatedSearch(){
        if(strlen($this->search) > 0){
            $url = route('admin.users.index', ['page'=> 1, 'search' => $this->search]);
        }else{
            $url = route('admin.users.index', ['page'=> $this->page]);
        }
                
        if($this->column)
            $url = $url . "&column=".$this->column;
        if($this->is_asc)
            $url = $url . "&order=".$this->is_asc;
        
        return redirect($url);
    }
    
    public function searhByUser(){
        
        if(strlen($this->search) > 0)
            $url = route('admin.users.index', ['page'=> $this->page, 'search' => $this->search]);
        else 
            $url = route('admin.users.index', ['page'=> $this->page]);
        
        if($this->column)
            $url = $url . "&column=".$this->column;
        if($this->is_asc)
            $url = $url . "&order=".$this->is_asc;
            
        return redirect($url);
    }
  
    public function columnSorteBy($column, $is_asc){
        $this->column = $column;
        $this->is_asc = $is_asc;
        
        if(strlen($this->search) > 0){
            $url = route('admin.users.index', ['page'=> 1, 'search' => $this->search, 'column' => $column, 'order' => $this->is_asc]);
        }else{
            $url = route('admin.users.index', ['page'=> $this->page, 'column' => $column, 'order' => $this->is_asc]);
        }
        
        return redirect($url);
    }
}
