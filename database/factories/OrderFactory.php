<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\City;
use App\Models\FulfillmentStatus;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\PaymentMethod;
use App\Models\PaymentStatus;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'total' => $this->faker->randomNumber(),
            'is_paid' => $this->faker->boolean,
            'payment_method_id' => PaymentMethod::factory(),
            'payment_status_id' => PaymentStatus::factory(),
            'order_status_id' => OrderStatus::factory(),
            'fulfillment_status_id' => FulfillmentStatus::factory(),
            'purchase_order_code' => $this->faker->word,
            'address_type' => $this->faker->word,
            'address' => $this->faker->word,
            'address_2' => $this->faker->word,
            'city_id' => City::factory(),
            'zipcode' => $this->faker->word,
        ];
    }
}
