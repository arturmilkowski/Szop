<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcentrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('concentrations')->insert([
            'id' => 1,
            'slug' => 'woda-kolonska',
            'name' => 'Woda kolońska'
        ]);
        DB::table('concentrations')->insert([
            'id' => 2,
            'slug' => 'woda-toaletowa',
            'name' => 'Woda toaletowa'
        ]);
    }
}
