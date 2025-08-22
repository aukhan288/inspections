<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubTag;

class SubTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subTags = [
            [
                'name' => 'Front',
            ],
            [
                'name' => 'Right Side',
            ],
            [
                'name' => 'Left Side',
            ],
            [
                'name' => 'Rear',
            ],
            [
                'name' => 'Hallway',
            ],
            [
                'name' => 'Front Living',
            ],
            [
                'name' => 'Mid Living',
            ],
            [
                'name' => 'Rear Living',
            ],
            [
                'name' => 'Additional Room 1',
            ],
            [
                'name' => 'Additional Room  2',
            ],
            [
                'name' => 'Store Room',
            ],
            [
                'name' => 'Garage',
            ],
            [
                'name' => 'Conservatory',
            ],
            [
                'name' => 'Dining Room',
            ],
            [
                'name' => 'Utility',
            ],
            [
                'name' => 'Kitchen',
            ],
            [
                'name' => 'Bath/Toilet',
            ],
            [
                'name' => 'Height',
            ],
            [
                'name' => 'Front Bed',
            ],
            [
                'name' => 'Mid Bed',
            ],
            [
                'name' => 'Rear Bed',
            ],
            [
                'name' => 'Additional Bed 1',
            ],
            [
                'name' => 'Additional Bed 2',
            ],
            [
                'name' => 'Additional Bed 3',
            ],
            [
                'name' => 'Secondary Heating',
            ],
            [
                'name' => 'Pre - stage',
            ],
            [
                'name' => 'Mid - stage',
            ],
            [
                'name' => 'Post - stage',
            ],
            [
                'name' => 'LDEC',
            ],
            [
                'name' => 'Draught proofing',
            ],
            [
                'name' => 'Hatch',
            ],
            
        ];

        foreach ($subTags as $subTag) {
            SubTag::create($subTag);
        }
    }
}
