<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ContactFormMessage;

class ContactFormMessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactFormMessage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'subject' => $this->faker->word,
            'phone_number' => $this->faker->phoneNumber,
            'message' => $this->faker->text,
            'email_sent' => $this->faker->boolean,
        ];
    }
}
