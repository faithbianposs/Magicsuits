<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $text=$this->faker->unique->word();
        return [
            'name'=>$text,
            'slug'=>Str::slug($text),
            'description'=>$this->faker->paragraph(),
            'stock'=>$this->faker->numberBetween(5,50),
            'price'=>$this->faker->randomFloat(50,5000),
            'category_id'=>Category::all()->random()->id
        ];
    }
}
