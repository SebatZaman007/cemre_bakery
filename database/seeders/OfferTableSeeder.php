<?php

namespace Database\Seeders;

use App\Models\offer;
use Illuminate\Database\Seeder;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        offer::create([
            'offer'=>'Upp to %15 off',
            'title_1'=>'June',
            'title_2'=>'Special Offer',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.'

        ]);
    }
}
