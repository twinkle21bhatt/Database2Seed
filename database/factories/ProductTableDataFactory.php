<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductTableDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product = Product::factory()->create([
            'name' => 'twinkle',
            'status' => 'add',
            'category' => 'drama',
        ]);
    }
}
