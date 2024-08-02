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
            ['name' => 'Bio-Bio'],
            ['name' => 'Arica y Parinacota'],
            ['name' => 'Maule'],
            ['name' => 'Valparaiso'],
            ['name' => 'Los Lagos'],

        ]);
    }
}
