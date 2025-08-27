<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeasureInstallation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
          ['measure_id' => 5, 'ESH'],
          ['measure_id' => 12, 'EWI'],
          ['measure_id' => 14, 'Loft insulation'],
          ['measure_id' => 11, 'IWI'],
          ['measure_id' => 10, 'HC'],
          ['measure_id' => 4, 'Boiler'],
          ['measure_id' => 4, 'Boiler & HC'],
          ['measure_id' => 4, 'FRI'],
        ];
    }
}
