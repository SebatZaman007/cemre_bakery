<?php

namespace Database\Seeders;

use App\Models\about;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        about::create([
            'about_image'=> 'shape3.png',
            'about_title'=>'Serve You Since 1988',
            'about_description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.'

        ]);
    }
}
