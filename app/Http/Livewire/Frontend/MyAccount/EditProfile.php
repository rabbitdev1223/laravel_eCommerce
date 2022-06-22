<?php

namespace App\Http\Livewire\Frontend\MyAccount;

use App\Models\User;
use App\Models\Job;
use App\Models\Department;
use App\Models\Location;
use App\Models\State;
use App\Models\Address;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class EditProfile extends Component
{
    public $userId;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $states;
    public $cities;

    public $image_id;

    public $departments;
    public $department_id;

    public $locations;
    public $location_id;

    public $locationsWithAddress;

    public $addresses;
    public $addressInputs;

    public $jobs;
    public $job_id;

    public $prev_first_name;
    public $prev_middle_name;
    public $prev_last_name;
    public $prev_email;
    public $prev_department_id;
    public $prev_location_id;
    public $prev_job_id;
    public $prev_addresses;

    public $hasChanged;

    protected $rules = [
        'first_name' => ['string'],
        'middle_name' => ['nullable', 'string'],
        'last_name' => ['string'],
        'email' => ['required', 'email:rfc'],
        'addresses.*.type' => ['required', 'string'],
        'addresses.*.address' => ['required', 'string'],
        'addresses.*.city_id' => ['required'],
        'addresses.*.zipcode' => ['required'],
    ];

    protected $messages = [
        'addresses.*.type.required' => 'The type is required.',
        'addresses.*.address.required' => 'The address is required.',
        'addresses.*.city_id.required' => 'The city is required.',
        'addresses.*.zipcode.required' => 'The zipcode is required.',
    ];

    protected $listeners = ['addressCityUpdated' => 'updateCityId'];

    public function updateCityId($eventParam)
    {
        $addressId = $eventParam['address_id'];
        $cityId = $eventParam['city_id'];

        $this->addresses = $this->addresses->map(function ($value, $key) use ($addressId, $cityId) {
            $updatedValue = $value;
            if ($updatedValue['id'] === $addressId) {
                $updatedValue['city_id'] = $cityId;

                $address = $updatedValue['address'];
                $addr = $this->locationsWithAddress->where('address', trim($address))->where('city_id', $cityId)->first();
                $updatedValue['companyAddress'] = $addr ? 'Evans (' . $addr->addressable->code . ')' : '';
            }

            return $updatedValue;
        });

        $this->validate();
    }

    public function mount()
    {
        $this->jobs = Job::all();
        $this->departments = Department::get(['id', 'title']);
        $this->locations = Location::whereNotNull('code')->get();
        $this->states = State::get(['id', 'title']);

        $this->locationsWithAddress = Address::whereHasMorph('addressable', [Location::class])->get();
        $this->userId = auth()->user()->id;

        $model = User::find($this->userId);
        $this->first_name = $model->first_name;
        $this->middle_name = $model->middle_name;
        $this->last_name = $model->last_name;
        $this->email = $model->email;
        $this->job_id = $model->job_id;
        $this->department_id = $model->department_id;
        $this->location_id = $model->location_id;
        $this->addresses = collect();

        foreach ($model->addresses as $address) {
            $addr = $this->locationsWithAddress->where('address', trim($address->address))->where('city_id', $address->city_id)->first();

            $this->addresses->push([
                'id' => $address->id,
                'type' => $address->type,
                'address' => $address->address,
                'address_2' => $address->address_2,
                'city_id' => $address->city_id,
                'zipcode' => $address->zipcode,
                'is_primary' => $address->is_primary,
                'city_title' => $address->city->title,
                'state_code' => $address->city->state->code,
                'state_id' => $address->city->state->id,
                'collapsed' => !$address->is_primary,
                'companyAddress' => $addr ? 'Evans (' . $addr->addressable->code . ')' : '',
            ]);
        }

        $this->prev_first_name = $model->first_name;
        $this->prev_middle_name = $model->middle_name;
        $this->prev_last_name = $model->last_name;
        $this->prev_email = $model->email;
        $this->prev_department_id = $model->department_id;
        $this->prev_location_id = $model->location_id;
        $this->prev_job_id = $model->job_id;
        $this->prev_addresses = $this->addresses;

        $this->hasChanged = true;
    }

    public function hasAnyFieldChanged()
    {
        return $this->prev_first_name !== $this->first_name ||
            $this->prev_middle_name !== $this->middle_name ||
            $this->prev_last_name !== $this->last_name ||
            $this->prev_email !== $this->email ||
            $this->prev_department_id !== $this->department_id ||
            $this->prev_location_id !== $this->location_id ||
            $this->prev_job_id !== $this->job_id ||
            $this->prev_addresses !== $this->addresses;
    }

    public function collapseClickHandler($clickedItemKey)
    {
        $this->addresses = $this->addresses->map(function ($value, $key) use ($clickedItemKey) {
            $updatedValue = $value;
            if ($clickedItemKey == $key) {
                $updatedValue['collapsed'] = !$updatedValue['collapsed'];
            }
            return $updatedValue;
        });
    }

    public function updated($propertyName, $propertyValue)
    {
        $propertyNameParts = explode('.', $propertyName);
        if ($propertyNameParts[0] == 'addresses') {
            $key = $propertyNameParts[1];
            if ($propertyNameParts[2] == 'state_id') {
                $addressId = $this->addresses[$key]['id'];
                $stateId = $propertyValue;
                $this->emitTo('frontend.my-account.select-cities', 'addressStateUpdated', ["address_id" => $addressId, "state_id" => $stateId]);
            }
            if ($propertyNameParts[2] == 'address') {
                $address = $propertyValue;
                $cityId = $this->addresses[$key]['city_id'];
                $addr = $this->locationsWithAddress->where('address', trim($address))->where('city_id', $cityId)->first();
                $this->addresses = $this->addresses->map(function ($value, $iKey) use ($addr, $key) {
                    $updatedValue = $value;
                    if ($iKey == $key) {
                        $updatedValue['companyAddress'] =  $addr ? 'Evans (' . $addr->addressable->code . ')' : '';
                    }
                    return $updatedValue;
                });
            }
        }



        $this->validateOnly($propertyName);
    }

    public function primaryRadioClickHandler($clickedItemKey)
    {
        $this->addresses = $this->addresses->map(function ($value, $key) use ($clickedItemKey) {
            $updatedValue = $value;
            $updatedValue['is_primary'] = $key == $clickedItemKey ? true : false;
            return $updatedValue;
        });
    }

    public function addNewAddress()
    {
        $this->addresses->push([
            'id' => null,
            'type' => null,
            'address' => null,
            'address_2' => null,
            'city_id' => null,
            'zipcode' => null,
            'is_primary' => $this->addresses->count() > 0 ? false : true,
            'city_title' => null,
            'state_code' => null,
            'state_id' => null,
            'collapsed' => false,
            'companyAddress' => '',
        ]);
    }

    public function deleteAddress($key)
    {
        $isPrimary = $this->addresses[$key]['is_primary'];
        unset($this->addresses[$key]);

        if ($isPrimary) {
            $this->addresses = $this->addresses->map(function ($value, $key) {
                $updatedValue = $value;
                if ($value == $this->addresses->first()) {
                    $updatedValue['is_primary'] = true;
                }
                return $updatedValue;
            });
        }
    }

    public function discard()
    {
        $this->first_name = $this->prev_first_name;
        $this->middle_name = $this->prev_middle_name;
        $this->last_name = $this->prev_last_name;
        $this->email = $this->prev_email;
        $this->department_id = $this->prev_department_id;
        $this->location_id = $this->prev_location_id;
        $this->job_id = $this->prev_job_id;
        $this->addresses = $this->prev_addresses;

        $this->hasChanged = false;
    }

    public function save()
    {
        $dataToValidate = [
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
        ];

        foreach ($this->addresses as $key => $address) {
            $dataToValidate['addresses'][$key] =  $address;
        }

        $validator = Validator::make($dataToValidate, $this->rules, $this->messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $this->setErrorBag($errors);

            $errorKeys = [];
            foreach ($errors->get('addresses.*') as $key => $message) {
                $addressKey = explode('.', $key)[1];
                array_push($errorKeys, $addressKey);
            }

            $this->addresses = $this->addresses->map(function ($value, $key) use ($errorKeys) {
                $updatedValue = $value;
                $updatedValue['collapsed'] = !in_array($key, $errorKeys);
                return $updatedValue;
            });

            return;
        }

        $data = [];
        $data = array_merge($data, [
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'department_id' => $this->department_id,
            'location_id' => $this->location_id,
            'job_id' => $this->job_id
        ]);

        if (count($data)) {
            User::find($this->userId)->update($data);
        }

        $newAddresses = $this->addresses->map(function ($value, $key) {
            return [
                'id' => null,
                'type' => $value['type'],
                'address' => $value['address'],
                'address_2' => $value['address_2'],
                'city_id' => $value['city_id'],
                'zipcode' => $value['zipcode'],
                'is_primary' => $value['is_primary'],
                'addressable_type' => 'App\Models\User',
                'addressable_id' => $this->userId,
            ];
        })->toArray();

        if (count($newAddresses)) {
            Address::where('addressable_type', '=', 'App\Models\User')->where('addressable_id', '=', $this->userId)->delete();
            Address::insert($newAddresses);
        }

        session()->flash('message', 'Account successfully updated.');
        return redirect()->to('/my-account');
    }

    public function render()
    {
        return view('livewire.frontend.my-account.edit-profile');
    }
}
