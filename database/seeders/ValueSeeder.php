<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "eng" => "Red",
                "uz" => "Qizil",
            ],

        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "eng" => "Black",
                "uz" => "Qora",
            ],

        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "eng" => "Brown",
                "uz" => "Jigarrang",
            ],

        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "eng" => "MDF",
                "uz" => "MDF",
            ],

        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "eng" => "LDSP",
                "uz" => "LDSP",
            ],

        ]);
    }
}
