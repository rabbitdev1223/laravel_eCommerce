<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Image;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\ProductType;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text,
            'slug' => $this->faker->slug,
            'manufacturer_id' => Manufacturer::factory(),
            'seo_keyword' => $this->faker->word,
            'meta_description' => $this->faker->word,
            'meta_keywords' => $this->faker->word,
            'image_id' => Image::factory(),
            'product_type_id' => ProductType::factory(),
        ];
    }
}
