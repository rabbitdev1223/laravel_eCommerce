<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Helpers\USPS;
use App\Models\City;
use App\Models\State;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use App\Models\Location;
use App\Models\Address as ActualAddress;
use App\Rules\UspsRule;

class Address extends Component
{
    public $locations;
    public $location;

    public $states, $cities;
    public $state, $city;

    public $zipcode;

    public $address, $address_2;

    protected $listeners = ['validateAddress'];
    
    public function mount()
    {
        $this->locations = ActualAddress::whereHasMorph('addressable', [Location::class])->get();

        $this->states = State::all();
        $this->cities = collect();

        if (auth()->user()->addresses->count() == 1) {
            $this->state = auth()->user()->addresses->first()->city->state->id;

            $this->cities = City::where('state_id', $this->state)->get();

            $this->address = auth()->user()->addresses->first()->address;
            $this->address_2 = auth()->user()->addresses->first()->address_2;
            $this->city = auth()->user()->addresses->first()->city_id;
            $this->zipcode = auth()->user()->addresses->first()->zipcode;
        }
    }

    public function render()
    {
        return view('livewire.frontend.checkout.address');
    }

    public function updatedState($value)
    {
        $this->cities = City::where('state_id', $value)->get();
        $this->city = $this->cities->first()->id ?? null;

        $this->zipcode = null;
    }

    public function updatedCity($value)
    {
        $this->zipcode = null;
    }
    
    public function updatedAddress(){
        $this->validateAddress();
    }
    
    public function validateAddress(){
        
        if((!$this->address || trim($this->address) == "") || (!$this->city || trim($this->city) == "")|| (!$this->state || trim($this->state) == "")|| (!$this->zipcode || trim($this->zipcode) == ""))
            return;
        
        $address_return = USPS::validateAddress($this->address, City::find($this->city)->title, State::find($this->state)->code, $this->zipcode);
        
        
        if(!$address_return){
            $validator = Validator::make([], []); // Empty data and rules fields
            $validator->errors()->add('address', 'Invalid Address.');
            throw new ValidationException($validator);
            
        }
        
        if($this->zipcode != $address_return->Address->Zip5->__toString()){
//             $validator = Validator::make([], []); // Empty data and rules fields
//             $validator->errors()->add('zipcode', 'Invalid zipcode for this Address Maybe: '.$address_return->Address->Zip5->__toString());
//             throw new ValidationException($validator);
            $this->zipcode = $address_return->Address->Zip5->__toString();
            
        }
        
        if(strtoupper($this->address) != strtoupper($address_return->Address->Address2->__toString())){
//             $validator = Validator::make([], []); // Empty data and rules fields
//             $validator->errors()->add('address', 'Invalid Address Maybe: '.$address_return->Address->Address2->__toString());
            
//             throw new ValidationException($validator);
            
            $this->address = $address_return->Address->Address2->__toString();
        }
    }
    
    protected function createAddress(){
        if (auth()->user()->addresses->count() == 1) {
            ActualAddress::find(auth()->user()->addresses->first()->id)->update([
                'type' => 'shipping',
                'address' => $this->address,
                'city_id' => $this->city,
                'zipcode' => $this->zipcode,
                'is_primary' => 1
            ]);
            
        } else {
            ActualAddress::create([
                'type' => 'shipping',
                'address' => $this->address,
                'city_id' => $this->city,
                'zipcode' => $this->zipcode,
                'is_primary' => 1,
                'addressable_id' => auth()->id(),
                'addressable_type' => 'App\Models\User',
            ]);
            
        }
    }
    
    public function updatedZipcode($value)
    {
        $this->validate([
            'state' => 'required',
            'city' => 'required',
            'zipcode' => ['required', 'string', new UspsRule],
            'address' => 'required'
        ]);

        $this->validateAddress();
       
        $this->createAddress();
       

        $this->dispatchBrowserEvent('toastr', 'Address Updated!');
    }

    public function updatedLocation($value)
    {
        $this->reset('zipcode');
        
        $address = ActualAddress::find($value);

        $this->address = $address->address;
        $this->address_2 = $address->address_2;
        $this->state = $address->city->state->id;
        $this->updatedState($this->state);
        $this->city = $address->city->id;
        $this->zipcode = $address->zipcode;

        $this->createAddress();
        
        $this->dispatchBrowserEvent('toastr', 'Address Updated!');

         
        

        $this->validate([
            'zipcode' => ['required', 'string', new UspsRule],
        ]);
    }
}
