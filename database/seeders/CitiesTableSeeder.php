<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('cities')->insert([
            ['name' => 'City X', 'province_id' => 1],
            ['name' => 'City Y', 'province_id' => 1],
            ['name' => 'City Z', 'province_id' => 2],
            ['name' => 'City W', 'province_id' => 3],
            ['name' => 'City V', 'province_id' => 4],
        ]);
    }
}
