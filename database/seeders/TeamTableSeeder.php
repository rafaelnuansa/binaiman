<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Rafael Nuansa R',
            'slug' => 'rafael-nuansa',
            'job' => 'Web Programmer',
            'image' => 'team.png',
        ]);

        Team::create([
            'name' => 'Team 2',
            'slug' => 'team-2',
            'job' => 'Web Programmer',
            'image' => 'team.png',
        ]);

        Team::create([
            'name' => 'Team 3',
            'slug' => 'team-3',
            'job' => 'Web Programmer',
            'image' => 'team.png',
        ]);

    }
}
