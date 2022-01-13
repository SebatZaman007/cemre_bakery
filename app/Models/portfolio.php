<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;

    protected $fillable=[
        'portfolio_image',
        'portfolio_productname',
        'portfolio_rate'
    ];
}
