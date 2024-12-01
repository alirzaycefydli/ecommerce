<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Product Name' . fake()->unique()->randomNumber(),
            'description' => fake()->text(),
            'short_description' => fake()->text(200),
            'brand' => 'Brand ' . fake()->numberBetween(1, 100),
            'price' => rand(10, 1000) * 100,
            'quantity' => rand(1, 10),
            'discount_percent' => rand(0, 20),
            'is_confirmed' => true,
            'is_featured' => fake()->boolean()
        ];
    }

    public function configure(): ProductFactory|Factory
    {
        return $this->afterCreating(function (Product $product) {
            $images = ProductImage::factory(rand(2, 5))->make(); //Generate random images between 2-5
            $images->first()->is_primary = true; //Set the first image as primary
            $product->images()->saveMany($images);
            Review::factory()->count(5)->create(['product_id' => $product->id]);
        });
    }
}
