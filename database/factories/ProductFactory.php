<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'category_id' => rand(1, 4),
            'name' => [
                'eng' => fake()->sentence(3),
                'uz' => 'Ixcham yotoqxona mebellari',
            ],
            'price' => rand(50000, 10000000),
            'description' => [
                'eng' => fake()->paragraph(5),
                'uz' => 'Katta matnda yetakchi mavzu bir qator kichik tarkibiy mavzularga, kichik mavzular esa o‘z navbatida paragraflar (mikro-mavzular)ga bo‘linadi.'
            ],
        ];
    }
}
