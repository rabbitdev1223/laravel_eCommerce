<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;
use App\Models\City;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->word,
            'address' => $this->faker->word,
            'address_2' => $this->faker->word,
            'city_id' => City::factory(),
            'zipcode' => $this->faker->word,
            'is_primary' => $this->faker->boolean,
        ];
    }
}
