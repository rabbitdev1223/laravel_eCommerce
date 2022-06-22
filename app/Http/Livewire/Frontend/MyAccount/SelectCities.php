<?php

namespace App\Http\Livewire\Frontend\MyAccount;

use App\Models\State;

use Livewire\Component;

class SelectCities extends Component
{
    public $cities;
    public $addressId;
    public $cityId;

    protected $listeners = [
        'addressStateUpdated' => 'updateCities'
    ];

    public function mount($stateId, $addressId, $cityId)
    {
        $this->addressId = $addressId;
        $this->cities = $stateId ? State::find($stateId)->cities : [];
        $this->cityId = $cityId;
    }

    public function updatedCityId($selectedCityId)
    {
        $this->emitTo('frontend.my-account.edit-profile', 'addressCityUpdated', ["address_id" => $this->addressId, "city_id" => $selectedCityId]);
    }

    public function updateCities($eventParam)
    {
        if ($eventParam['address_id'] == $this->addressId) {
            $this->cities = !!$eventParam['state_id'] ? State::find($eventParam['state_id'])->cities : [];
            $this->updatedCityId(null);
        }
    }

    public function render()
    {
        return view('livewire.frontend.my-account.select-cities');
    }
}
