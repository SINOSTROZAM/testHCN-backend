<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('regions')->insert([
            ['name' => 'Region 1'],
            ['name' => 'Region 2'],
            ['name' => 'Region 3'],
        ]);
    }
}
