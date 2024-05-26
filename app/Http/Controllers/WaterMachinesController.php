<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaterMachinesController extends Controller
{
    //
    public function index(){
        return view('watermachine.index');
    }
}
