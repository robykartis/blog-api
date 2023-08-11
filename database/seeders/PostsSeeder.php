<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::create([
            'title' => 'Judul Pertama',
            'content' => 'Isi Pertama',
            'author' => 'Author Pertama',
            'image' => 'image.png',
        ]);
        Posts::create([
            'title' => 'Judul Kedua',
            'content' => 'Isi Kedua',
            'author' => 'Author Kedua',
            'image' => 'image.png',
        ]);
        Posts::create([
            'title' => 'Judul Ketiga',
            'content' => 'Isi Ketiga',
            'author' => 'Author Ketiga',
            'image' => 'image.png',
        ]);
    }
}
