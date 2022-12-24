<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            'slug' => 'wokol-lawendy',
            'name' => 'Wokół lawendy'
        ]);
        DB::table('brands')->insert([
            'slug' => 'wokol-bergamoty',
            'name' => 'Wokół bergamoty'
        ]);
    }
}
