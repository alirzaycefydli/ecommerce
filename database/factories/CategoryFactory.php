<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->words(2, true),
            'description' => fake()->sentence(),
            'parent_category_id' => null,
        ];
    }

    public function withParent(Category $parent): self
    {
        return $this->state(function () use ($parent) {
            return [
                'parent_category_id' => $parent->id,
            ];
        });
    }
}
