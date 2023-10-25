<?php

namespace Database\Seeders;

use App\Models\Program;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Program::create([
            'name'      => 'SMK Plus',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, tempore consequuntur? Ad mollitia voluptatem commodi ipsam possimus omnis itaque eveniet magnam. Dolore, ad voluptate molestiae itaque iure hic nemo sequi!',
            'slug' => 'smk-plus',
            'image' => 'default.png'
        ]);


        Program::create([
            'name'      => 'Pesantren Sepuh',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, tempore consequuntur? Ad mollitia voluptatem commodi ipsam possimus omnis itaque eveniet magnam. Dolore, ad voluptate molestiae itaque iure hic nemo sequi!',
            'slug' => 'smk-plus',
            'image' => 'default.png'
        ]);



        Program::create([
            'name'      => 'Another',
            'description'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, tempore consequuntur? Ad mollitia voluptatem commodi ipsam possimus omnis itaque eveniet magnam. Dolore, ad voluptate molestiae itaque iure hic nemo sequi!',
            'slug' => 'smk-plus',
            'image' => 'default.png'
        ]);
    }
}
