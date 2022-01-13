<?php

namespace App\Http\Controllers\Frontend;

use App\Models\home;
use App\Models\offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\portfolio;

class MainController extends Controller
{
    public function mainIndex(){
        $data=home::latest()->get();
        $offer=offer::latest()->get();
        $about=about::latest()->get();
        $portfolio=portfolio::latest()->get();
        return view('frontend.master',compact('data','offer','about','portfolio'));
    }


}
