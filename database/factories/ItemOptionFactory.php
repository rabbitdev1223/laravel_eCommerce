<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Item;
use App\Models\ItemOption;
use App\Models\ItemOptionType;
use App\Models\ItemOptionValue;

class ItemOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => Item::factory(),
            'item_option_value_id' => ItemOptionValue::factory(),
            'item_option_type_id' => ItemOptionType::factory(),
        ];
    }
}
