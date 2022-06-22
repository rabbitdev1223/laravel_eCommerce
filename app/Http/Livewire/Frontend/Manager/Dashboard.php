<?php

namespace App\Http\Livewire\Frontend\Manager;

use Illuminate\Support\Facades\Route;
use Livewire\Component;


class Dashboard extends Component
{
 
    public $initial_dt;
    public $final_dt;
    
    protected $listeners = ['search'];
    
    public function mount($dates){
        $this->initial_dt = $dates['initial_dt'];
        $this->final_dt = $dates['final_dt'];
    }
    
    public function search(){
        $this->validate([
            "initial_dt" => 'required|date',
            "final_dt" => 'required|date|after_or_equal:initial_dt',
        ],[
            'final_dt.after_or_equal' => 'The Final date must be a date after or equal to Initial Date.'
        ]);
        
       $param = base64_encode($this->initial_dt . "|" . $this->final_dt);
       $url = route('dashboard', ['dates'=> $param]);
       
       return redirect($url);
    }
    
    public function render()
    {
        return view('livewire.frontend.manager.dashboard');
    }
}