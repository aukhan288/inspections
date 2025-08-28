<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Element;

class ElementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $elements = [
            [
                'name' => 'ESH', 
                
            ],
            [
                'name' => 'EWI', 
                
            ],
            [
                'name' => 'Loft insulation', 
                
            ],
            [
                'name' => 'IWI', 
                
            ],
            [
                'name' => 'RIRI', 
                
            ],
            [
                'name' => 'HC', 
                
            ],
            [
                'name' => 'Boiler', 
                
            ],
            [
                'name' => 'Boiler& HC', 
                
            ],
            [
                'name' => 'FRI', 

            ],
        ];

        foreach ($elements as $element) {
            Element::create($element);
        
    }
    }
}
