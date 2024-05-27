<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaterPackages;

class WaterPackagesController extends Controller
{
    //
    public function index(){
        $waterPackages=WaterPackages::All();
        return view('waterpackages.index',compact('waterPackages'));
    }
}
