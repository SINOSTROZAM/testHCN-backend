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
            ['name' => 'Street 1', 'region_id' => 1 , 'province_id' => 1, 'city_id' => 1],
            ['name' => 'Street 2', 'region_id' => 1 , 'province_id' => 1, 'city_id' => 1],
            ['name' => 'Street 3', 'region_id' => 2 , 'province_id' => 2, 'city_id' => 2],
            ['name' => 'Street 4', 'region_id' => 1 , 'province_id' => 3, 'city_id' => 3],
            ['name' => 'Street 5', 'region_id' => 3 , 'province_id' => 3, 'city_id' => 4],
        ]);
    }
}
