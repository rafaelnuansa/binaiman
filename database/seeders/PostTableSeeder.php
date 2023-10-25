<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Post::create([
            'category_id' => 1, // Ganti dengan ID kategori yang sesuai
            'user_id' => 1,     // Ganti dengan ID pengguna yang sesuai
            'title' => 'Contoh Judul',
            'title_en' => 'Sample Title (English)',
            'title_ar' => 'عنوان عينة (Arabic)',
            'slug' => 'contoh-judul',
            'image' => 'image.jpg',
            'content' => 'Isi posting contoh.',
            'content_en' => 'Sample content (English)',
            'content_ar' => 'المحتوى عينة (Arabic)',
            'views' => 0,
            'meta_description' => 'Deskripsi meta contoh',
            'meta_keyword' => 'Kata kunci meta contoh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
