<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\PaymentMethod;
use App\Models\PaymentStatus;
use App\Models\Transaction;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'payment_method_id' => PaymentMethod::factory(),
            'payment_status_id' => PaymentStatus::factory(),
            'order_status_id' => OrderStatus::factory(),
            'fulfillment_status_id' => $this->faker->word,
            'amount' => $this->faker->randomNumber(),
        ];
    }
}
