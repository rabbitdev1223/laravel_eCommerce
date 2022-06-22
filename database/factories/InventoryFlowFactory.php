<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\InventoryFlow;
use App\Models\Item;
use App\Models\Location;
use App\Models\User;

class InventoryFlowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InventoryFlow::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => Item::factory(),
            'quantity' => $this->faker->randomNumber(),
            'is_leaving' => $this->faker->boolean,
            'sale_price' => $this->faker->randomNumber(),
            'cost_price' => $this->faker->randomNumber(),
            'location_id' => Location::factory(),
            'user_id' => User::factory(),
        ];
    }
}
