<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define realistic services with updated image paths
        $services = [
            [
                'name' => 'Advanced Bootcamp Training',
                'description' => 'A comprehensive bootcamp to enhance physical endurance and strength.',
                'type' => 'bootcamp',
                'image' => 'frontend/images/NewServices/bootcamp1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Youth Football Academy',
                'description' => 'Professional football coaching for young aspiring players.',
                'type' => 'sports-training',
                'image' => 'frontend/images/NewServices/sports1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CrossFit Bootcamp',
                'description' => 'High-intensity CrossFit training for all levels.',
                'type' => 'bootcamp',
                'image' => 'frontend/images/NewServices/bootcamp2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Basketball Skill Development',
                'description' => 'Focused training sessions to improve basketball skills.',
                'type' => 'sports-training',
                'image' => 'No image',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beginner Yoga Retreat',
                'description' => 'Relax and rejuvenate with our beginner-friendly yoga sessions.',
                'type' => 'yoga',
                'image' => 'frontend/images/NewServices/yoga1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the services into the database
        DB::table('services')->insert($services);
    }
}
