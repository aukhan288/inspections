<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasureSubTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
    ['measure_id' => 1, 'sub_tag_id' => 26],
    ['measure_id' => 1, 'sub_tag_id' => 27],
    ['measure_id' => 1, 'sub_tag_id' => 28],

    ['measure_id' => 12, 'sub_tag_id' => 1],
    ['measure_id' => 12, 'sub_tag_id' => 2],
    ['measure_id' => 12, 'sub_tag_id' => 3],
    ['measure_id' => 12, 'sub_tag_id' => 4], // kept only once

    ['measure_id' => 14, 'sub_tag_id' => 26],
    ['measure_id' => 14, 'sub_tag_id' => 27],
    ['measure_id' => 14, 'sub_tag_id' => 28],
    ['measure_id' => 14, 'sub_tag_id' => 29],
    ['measure_id' => 14, 'sub_tag_id' => 30],
    ['measure_id' => 14, 'sub_tag_id' => 31], // kept only once

    ['measure_id' => 11, 'sub_tag_id' => 5],
    ['measure_id' => 11, 'sub_tag_id' => 6],
    ['measure_id' => 11, 'sub_tag_id' => 7],
    ['measure_id' => 11, 'sub_tag_id' => 8],
    ['measure_id' => 11, 'sub_tag_id' => 9],
    ['measure_id' => 11, 'sub_tag_id' => 10],
    ['measure_id' => 11, 'sub_tag_id' => 14],
    ['measure_id' => 11, 'sub_tag_id' => 16],
    ['measure_id' => 11, 'sub_tag_id' => 17],
    ['measure_id' => 11, 'sub_tag_id' => 19],
    ['measure_id' => 11, 'sub_tag_id' => 20],
    ['measure_id' => 11, 'sub_tag_id' => 21],
    ['measure_id' => 11, 'sub_tag_id' => 22],
    ['measure_id' => 11, 'sub_tag_id' => 23],
    ['measure_id' => 11, 'sub_tag_id' => 24],
    ['measure_id' => 11, 'sub_tag_id' => 26],
];


        DB::table('measure_sub_tags')->insert($data);
    }
}
