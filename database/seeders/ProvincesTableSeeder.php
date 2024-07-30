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
            ['name' => 'Province A', 'region_id' => 1],
            ['name' => 'Province B', 'region_id' => 1],
            ['name' => 'Province C', 'region_id' => 2],
            ['name' => 'Province D', 'region_id' => 3],
            ['name' => 'Province E', 'region_id' => 3],
        ]);
    }
}
