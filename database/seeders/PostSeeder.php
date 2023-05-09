<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Belajar Model Dengan Laravel',
            'slug' => ' belajar-model-dengan-laravel',
            'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Belajar Model',
            'content' => 'Belajar dengan Laravel sungguh menyenangkan',
            'draft' => 0
        ]);
    }
}
