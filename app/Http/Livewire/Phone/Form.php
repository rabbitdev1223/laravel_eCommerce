<?php

namespace App\Http\Livewire\Phone;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Phone;

class Form extends Component
{
    use WithFileUploads;
    
    public $phone_id;
    public $type;
    public $number;
    public $is_primary;
    public $userid;
    public $title;
        
    protected $listeners = ['togglePhone','deletePhone'];
    
    public function mount()
    {
        $this->phone_id = 0;
        $this->type = "";
        $this->number = "";
        $this->userid =0;
        $this->title = "Add New Phone";
    }
    
    public function load(){
        
        if(intval($this->phone_id) <= 0){
            return;
        }
        
        $phone = Phone::find($this->phone_id);
        
        if(!$phone){
            return;
        }
            
        $this->type = $phone->type;
        $this->number = $phone->number;
        $this->is_primary = $phone->is_primary;
        $this->userid = $phone->phoneable_id;
        $this->title = "Update Phone";
        
    }
    
    public function submit(){
        
        $this->validate([
            'type' => 'required',
            'number' => 'required',
        ]);
       
        
        if(intval($this->is_primary) == 1){
            foreach (User::find($this->userid)->phones as $p) {
                $p->is_primary = False;
                $p->save();
            }
        }
        
        if($this->phone_id >0){
            $p = Phone::find($this->phone_id);
           
            $p->type = $this->type;
            $p->number = $this->number;
            $p->is_primary = intval($this->is_primary) == 1;
            
            $p->save();
            session()->flash('message','Contact Number changed with successfully!');
        }else{
            $p = new Phone;
            
            $p->phoneable_type = 'App\\Models\\User';
            $p->phoneable_id = $this->userid;
            
            $p->type = $this->type;
            $p->number = $this->number;
            $p->is_primary = intval($this->is_primary) == 1;
            
            $p->save();
            
            $this->phone_id = $p->id;
            
            session()->flash('message', 'New Contact Number created with successfully!');
        }
                    
        
        return redirect()->to(route('admin.users.profile.edit', $this->userid));
    }
    
    public function togglePhone($phone_id, $user_id){
       
        $this->phone_id = $phone_id;
        $this->userid = $user_id;
        $this->type = "";
        $this->number = "";
        $this->is_primary = 0;
        $this->title = "New Phone";
        
        $this->load();
    }
    
    public function render()
    {
        return view('livewire.phone.form');
    }
    
    public function deletePhone($phone_id, $user_id){
        
        if(!Auth::user()->hasRole('super')){
            session()->flash('message', 'It was not possible to remove the contact, operation canceled!');
            return redirect()->to(route('admin.users.profile.edit', $user_id));
        }
        
        $phone = Phone::find($phone_id);
        
        if(!$phone){
            return;
        }
        
        $deleted = $phone->delete();
        
        if($deleted){
            session()->flash('message','contact deleted with success!');
        }else{
            session()->flash('message', 'It was not possible to remove the contact, operation canceled!');
        }
        
        return redirect()->to(route('admin.users.profile.edit', $user_id));
            
    }
    
}
