<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\Property;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $properties = Property::factory(3)->create();
        // \App\Models\User::factory(10)->create();
        Product::factory(100)
            ->hasAttached($properties, function () {
                return [
                    'value' => ucfirst(fake()->word()),
                ];
            })
            ->create();
    }
}
