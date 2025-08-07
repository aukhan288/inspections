<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            [
                'name' => 'Standard Room', 
                'tag_id' => 2
            ],
            [
                'name' => 'Wet Room', 
                'tag_id' => 2
            ],
            [
                'name' => 'Standard Room', 
                'tag_id' => 3
            ],
            [
                'name' => 'Wet Room', 
                'tag_id' => 3
            ],
            [
                'name' => 'Standard Room / Wet Room', 
                'tag_id' => 3
            ],
        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
