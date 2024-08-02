<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StreetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('streets')->insert([
            ['name' => 'Rio Loa', 'region_id' => 1 , 'province_id' => 1, 'city_id' => 1],
            ['name' => 'Rio Tolten', 'region_id' => 1 , 'province_id' => 1, 'city_id' => 1],
            ['name' => 'Rio Trancura', 'region_id' => 2 , 'province_id' => 2, 'city_id' => 2],
            ['name' => 'Rio Trupan', 'region_id' => 1 , 'province_id' => 3, 'city_id' => 3],
            ['name' => 'Rio Laja', 'region_id' => 3 , 'province_id' => 3, 'city_id' => 4],
        ]);
    }
}
