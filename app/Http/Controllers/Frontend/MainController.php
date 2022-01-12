<?php

namespace App\Http\Controllers\Frontend;

use App\Models\home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function mainIndex(){
        $data=home::latest()->get();
        return view('frontend.master',compact('data'));
    }
}
