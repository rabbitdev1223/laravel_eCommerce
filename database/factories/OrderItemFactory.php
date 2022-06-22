<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderItem;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => Item::factory(),
            'order_id' => Order::factory(),
            'quantity' => $this->faker->randomNumber(),
            'sale_price' => $this->faker->randomNumber(),
            'cost_price' => $this->faker->randomNumber(),
            'points' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
