<?php

namespace App\Http\Livewire\Address;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Address;
use App\Models\Order;
use App\Models\State;
use App\Models\City;
use App\Models\User;
use App\Helpers\USPS;
use App\Rules\UspsRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class Form extends Component
{
    use WithFileUploads;
    
    public $address_id;
    public $type;
    public $address;
    public $address2;
    public $city_id;
    public $stateId;
    public $zipcode;
    public $is_primary;
    public $userid;
    public $title;
    public $action;
    public $obj;
    public $cities;
    public $states;
    
    protected $listeners = ['toggleAddress','deleteAddress', 'formOrder'];
    
    public function mount($action = null, $obj = null)
    {
        
        $this->action = $action;
        $this->obj = $obj;
        
        $this->address_id = 0;
        $this->type = "";
        $this->address = "";
        $this->address2 = "";
        $this->city_id = 0;
        $this->stateId = 0;
        $this->zipcode = "";
        $this->userid =0;
        $this->title = "Add New Address";
        $this->cities = [];
    }
    
    public function load(){
        if(intval($this->address_id) <= 0){
            return;
        }
        
        $address = Address::find($this->address_id);
        
        if(!$address){
            return;
        }
            
        $this->address_id = $address->id;
        $this->type = $address->type;
        $this->address = $address->address;
        $this->address2 = $address->address_2;
        $this->stateId = $address->city->state_id;
//         $this->cities = City::where('state_id', $address->city->state_id)->orderBy('title','ASC')->get();
        $this->cities = City::select('id','title')->where('state_id', $address->city->state_id)->orderBy('title','ASC')->get()->toArray();
        $this->city_id = $address->city_id;
        $this->zipcode = $address->zipcode;
        $this->userid = $address->addressable_id;
        $this->is_primary = $address->is_primary;
        
        $this->title = "Update Address";
        
    }
    
    public function submit(){
        
        $this->validate([
            'type' => 'required',
            'address' => 'required',
            'city_id' => 'required',
            'stateId' => 'required',
            'zipcode' => ['required', 'string', new UspsRule],
        ]);
       
        
        $address_return = USPS::validateAddress($this->address, City::find($this->city_id)->title, State::find($this->stateId)->code, $this->zipcode);
        
        
        if(!$address_return){
            $validator = Validator::make([], []); // Empty data and rules fields
            $validator->errors()->add('address', 'Invalid Address.');
            throw new ValidationException($validator);
            
        }
        
        if($this->zipcode != $address_return->Address->Zip5->__toString()){
            $this->zipcode = trim($address_return->Address->Zip5->__toString());
        }
        
        if(strtoupper($this->address) != strtoupper($address_return->Address->Address2->__toString())){
            $this->address = trim($address_return->Address->Address2->__toString());
        }
        
        if(strtoupper(State::find($this->stateId)->code) != strtoupper($address_return->Address->State->__toString())){
            $state_search = State::where('code', strtoupper($address_return->Address->State->__toString()))->get()->first();
            
            if(!$state_search){
                $validator = Validator::make([], []); // Empty data and rules fields
                $validator->errors()->add('stateId', 'Invalid State.');
                throw new ValidationException($validator);
            }
            
            if($state_search->id != $this->stateId){
                $this->stateId = $state_search->id;
            }
        }
        
        if(strtoupper(City::find($this->city_id)->title) != strtoupper($address_return->Address->City->__toString())){
           
            $city_search = City::where(DB::raw("upper(title)"), strtoupper($address_return->Address->City->__toString()))
            ->where('state_id',$this->stateId)->get()->first();
            
            if(!$city_search){
                $validator = Validator::make([], []); // Empty data and rules fields
                $validator->errors()->add('city_id', 'Invalid City.');
                throw new ValidationException($validator);
            }
            $this->city_id = $city_search->id;
        }
        
        if(intval($this->is_primary) == 1){
            foreach (User::find($this->userid)->addresses as $a) {
                $a->is_primary = False;
                $a->save();
            }
        }
        
        if($this->address_id >0){
            $a = Address::find($this->address_id);
            
            $a->type = $this->type;
            $a->address = $this->address;
            $a->address_2 = $this->address2;
            $a->city_id = $this->city_id;
            $a->zipcode = $this->zipcode;
            $a->is_primary = intval($this->is_primary) == 1;
            
            $a->save();
            session()->flash('message','Address changed with successfully!');
        }else{
            $a = new Address;
            
            $a->addressable_type = 'App\\Models\\User';
            $a->addressable_id = $this->userid;
            $a->type = $this->type;
            $a->address = $this->address;
            
            $a->address_2 = $this->address2;
            
            $a->city_id = $this->city_id;
            $a->zipcode = $this->zipcode;
            $a->is_primary = intval($this->is_primary) == 1;
            
            $a->save();
            
            $this->address_id = $a->id;
            
            session()->flash('message', 'New Address created with successfully!');
        }
                    
        
        return redirect()->to(route('admin.users.profile.edit', $this->userid));
    }
    
    public function toggleAddress($address_id, $user_id){
       
        $this->address_id = $address_id;
        $this->userid = $user_id;
        $this->type = "";
        $this->address = "";
        $this->address2 = "";
        $this->city_id = null;
        $this->stateId = null;
        $this->zipcode = "";
        $this->is_primary = 0;
        $this->title = "New Address";
        
        $this->load();
    }
    
    public function updatedStateId($stateId){
        $this->city_id = null;
        $this->cities = City::select('id','title')->where('state_id', $this->stateId)->orderBy('title','ASC')->get()->toArray();
    }
    
    public function render()
    {
        $this->states = State::orderBy('title','ASC')->get();
        
        if($this->stateId > 0)
            $this->cities = City::select('id','title')->where('state_id', $this->stateId)->orderBy('title','ASC')->get()->toArray();
        
        return view('livewire.address.form');
    }
    
    public function deleteAddress($address_id, $user_id){
        
        if(!Auth::user()->hasRole('super')){
            session()->flash('message', 'It was not possible to remove the address, operation canceled!');
            return redirect()->to(route('admin.users.profile.edit', $user_id));
        }
        
        $address = Address::find($address_id);
        
        if(!$address){
            return;
        }
        
        $deleted = $address->delete();
        
        if($deleted){
            session()->flash('message','address deleted with success!');
        }else{
            session()->flash('message', 'It was not possible to remove the address, operation canceled!');
        }
        
        return redirect()->to(route('admin.users.profile.edit', $user_id));
            
    }
    
    public function formOrder($action, $id){
        $this->action = $action;
        
        
        $order = Order::find($id);
        $this->type = $order->address_type;
        $this->address = $order->address;
        $this->address2 = $order->address_2;
        $this->updatedStateId($order->city->state_id);
        $this->stateId = $order->city->state_id;
        $this->zipcode = $order->zipcode;
        $this->city_id = $order->city_id;
        $this->is_primary = 1;
        $this->title = "Update Order Address";
        
    }
    
}
