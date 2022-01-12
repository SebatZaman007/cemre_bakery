<?php

namespace Database\Seeders;

use App\Models\home;
use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        home::create([
            'logo'=>'default-img.jpg',
            'title'=>'BAKERY MAKES ',
            'description_1'=>'A Taste Of  The Good Life',
            'description_2'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.',
        ]);
    }
}
