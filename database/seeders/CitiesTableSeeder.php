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
            ['name' => 'Arica', 'province_id' => 1],
            ['name' => 'Camarones', 'province_id' => 1],
            ['name' => 'General Lagos', 'province_id' => 2],
            ['name' => 'Colchane', 'province_id' => 3],
            ['name' => 'Pica', 'province_id' => 4],
        ]);
    }
}
