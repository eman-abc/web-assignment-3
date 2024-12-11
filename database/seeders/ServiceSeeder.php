<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an instance of Faker
        $faker = Faker::create();

        // Generate multiple random services (let's say 10)
        foreach (range(1, 10) as $index) {
            DB::table('services')->insert([
                'name' => $faker->word,               // Random service name
                'description' => $faker->paragraph,    // Random description
                'type' => $faker->randomElement(['bootcamp', 'sports-training', 'yoga']),  // Random type from available options
                'image' => $faker->imageUrl(640, 480, 'business'), // Random image URL
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
