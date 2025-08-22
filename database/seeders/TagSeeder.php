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
                'haseoptions' => false
            ],
            [
                'name' => 'Ground Floor', 
                'haseoptions' => true
            ],
            [
                'name' => 'First Floor', 
                'haseoptions' => true
            ],
            [
                'name' => 'ESH', 
                'haseoptions' => false
            ],
            [
                'name' => 'Loft', 
                'haseoptions' => false
            ],
            [
                'name' => 'RIR', 
                'haseoptions' => false
            ],
            [
                'name' => 'HC', 
                'haseoptions' => false
            ],
            [
                'name' => 'Boiler', 
                'haseoptions' => false
            ],
            [
                'name' => 'FTCH', 
                'haseoptions' => false
            ],
            [
                'name' => 'Flat Roof', 
                'haseoptions' => false
            ],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
