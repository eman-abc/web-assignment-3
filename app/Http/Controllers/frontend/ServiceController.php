<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function yoga(){
        return view('frontend.yoga');
    }


    public function sportsTraining(){
        return view('frontend.sports-training');
    }


    public function bootcamp(){
        return view('frontend.bootcamp');
    }
}

