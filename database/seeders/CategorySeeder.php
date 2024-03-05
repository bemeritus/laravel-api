<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
              'eng' => 'Table',
              'uz' => 'Stol',
            ],
        ]);

        Category::create([
            'name' => [
                'eng' => 'Chair',
                'uz' => 'Stul',
            ],
        ]);

        Category::create([
            'name' => [
                'eng' => 'Armchair',
                'uz' => 'Kreslo',
            ],
        ]);

        Category::create([
            'name' => [
                'eng' => 'Bed',
                'uz' => 'Yotoq',
            ],
        ]);
    }
}
