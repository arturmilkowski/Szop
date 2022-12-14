<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'product_id' => 1,
            'size_id' => 2,
            'slug' => '15-ml',
            'name' => '15 ml',
            'price' => 40,
            'quantity' => 5,
            'description' => 'szklana butelka z atomizerem zakręcanym na gwint.',
            'img' => 'lawenda-dla-panow-15-ml.webp'
        ]);
        DB::table('types')->insert([
            'product_id' => 1,
            'size_id' => 1,
            'slug' => 'probka-4-ml',
            'name' => 'próbka 4 ml',
            'price' => 15,
            'quantity' => 5,
            'description' => 'próbka w szklanej buteleczce z atomizerem. zakręcana na gwint.',
            'img' => 'lawenda-dla-panow-4-ml.webp'
        ]);
    }
}
