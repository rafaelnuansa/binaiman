<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Category 1',
                'slug' => 'category-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Category 2',
                'slug' => 'category-2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
