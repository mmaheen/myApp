<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('home.home');
    }
    // Shift + Alt + Down Key for duplicate line in visual studio code
    // control + / for coomments in visual studio code 
    public function about(){
        return view('home.about');
    }
}
