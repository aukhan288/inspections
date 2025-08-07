<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $tags = [
            [
                'name' => 'Elevation', 
                'haseoptons' => false
            ],
            [
                'name' => 'Ground Floor', 
                'haseoptons' => true
            ],
            [
                'name' => 'First Floor', 
                'haseoptons' => true
            ],
            [
                'name' => 'ESH', 
                'haseoptons' => false
            ],
            [
                'name' => 'Loft', 
                'haseoptons' => false
            ],
            [
                'name' => 'RIR', 
                'haseoptons' => false
            ],
            [
                'name' => 'HC', 
                'haseoptons' => false
            ],
            [
                'name' => 'Boiler', 
                'haseoptons' => false
            ],
            [
                'name' => 'FTCH', 
                'haseoptons' => false
            ],
            [
                'name' => 'Flat Roof', 
                'haseoptons' => false
            ],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
