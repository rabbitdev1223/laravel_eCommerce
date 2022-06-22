<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Image;
use App\Models\Item;
use App\Models\ItemUom;
use App\Models\Product;
use App\Models\StockStatus;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'item_uom_id' => ItemUom::factory(),
            'sale_price' => $this->faker->randomNumber(),
            'cost_price' => $this->faker->randomNumber(),
            'stock_status_id' => StockStatus::factory(),
            'quantity' => $this->faker->randomNumber(),
            'image_id' => Image::factory(),
            'weight' => $this->faker->randomFloat(2, 0, 999999.99),
            'length' => $this->faker->randomFloat(2, 0, 999999.99),
            'width' => $this->faker->randomFloat(2, 0, 999999.99),
            'height' => $this->faker->randomFloat(2, 0, 999999.99),
            'mpn' => $this->faker->word,
            'internal_number' => $this->faker->word,
            'model_number' => $this->faker->word,
            'part_number' => $this->faker->word,
        ];
    }
}
