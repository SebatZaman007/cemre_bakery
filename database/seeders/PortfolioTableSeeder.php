<?php

namespace Database\Seeders;

use App\Models\portfolio;
use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        portfolio::create([
            'portfolio_image'=>'1642074240_cemrebakerylogo.png',
            'portfolio_productname'=>'Progresso İtalian Style',
            'portfolio_rate'=>'12'

        ]);

    }
}
