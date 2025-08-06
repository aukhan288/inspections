<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Measure;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $measures = [
            ['name' => 'Electrical System', 'description' => 'Inspection of electrical components and systems'],
            ['name' => 'Plumbing', 'description' => 'Inspection of water supply, drainage, and fixtures'],
            ['name' => 'Structural', 'description' => 'Inspection of foundations, walls, and support structures'],
            ['name' => 'Boiler Replacement', 'description' => 'Replacement of old or inefficient boilers with new units'],
            ['name' => 'ESH', 'description' => 'Electric Storage Heaters: Installation or upgrade for improved efficiency'],
            ['name' => 'Pitched Roof', 'description' => 'Insulation or improvement of pitched (sloped) roofs'],
            ['name' => 'Room in Roof', 'description' => 'Insulation or conversion of attic/loft spaces used as living areas'],
            ['name' => 'UFI', 'description' => 'Under Floor Insulation: Adding insulation beneath floors'],
            ['name' => 'First Time Central Heating', 'description' => 'Installation of central heating systems in properties for the first time'],
            ['name' => 'Heating Controls', 'description' => 'Installation or upgrade of thermostats, timers, and zone controls'],
            ['name' => 'IWI', 'description' => 'Internal Wall Insulation: Insulating the inside of external walls'],
            ['name' => 'EWI', 'description' => 'External Wall Insulation: Adding insulation to the outside of external walls'],
            ['name' => 'CWI', 'description' => 'Cavity Wall Insulation: Filling the gap between external walls with insulation'],
            ['name' => 'Loft', 'description' => 'Loft Insulation: Adding or upgrading insulation in the loft area'],
        ];

        foreach ($measures as $measure) {
            Measure::create($measure);
        }
    }
}
