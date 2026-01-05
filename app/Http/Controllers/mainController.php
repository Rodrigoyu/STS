<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
     public function login(){
        return view('login');
    }

    public function dashBoard(){
        return view('dashBoard');
    }
}
