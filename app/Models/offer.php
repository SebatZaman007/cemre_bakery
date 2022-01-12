<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;

    protected $fillable=[
        'offer',
        'title_1',
        'title_2',
        'description',
    ];
}
