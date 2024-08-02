<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('provinces')->insert([
            ['name' => 'Iquique', 'region_id' => 1],
            ['name' => 'Tamarugal', 'region_id' => 1],
            ['name' => 'Antofagasta', 'region_id' => 2],
            ['name' => 'Copiapo', 'region_id' => 3],
            ['name' => 'Elqui', 'region_id' => 4],
        ]);
    }
}
