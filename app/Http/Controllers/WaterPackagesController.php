<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaterPackagesController extends Controller
{
    //
    public function index(){
        return view('waterpackages.index');
    }
}
