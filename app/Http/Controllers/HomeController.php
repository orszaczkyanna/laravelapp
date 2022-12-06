<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    public function index(){
        return view('index');
    }
    */

    public function __invoke(){
        return view('index');
    }

    //Ha egyetlen metódust akarok használni egy controlleren belül, akkor __invoke

}
