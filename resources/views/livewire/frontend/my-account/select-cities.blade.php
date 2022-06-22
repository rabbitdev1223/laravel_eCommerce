<select wire:model="cityId" class="form-select form-select-solid form-select-lg" aria-label="Select a city" data-placeholder="Select a city...">
    <option value="">Select a city</option>
    @foreach ($cities as $city)
    <option value="{{ $city['id'] }}">{{ $city['title'] }}</option>
    @endforeach
</select>
