<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //return the index page
    public function index(){
        return view('pages.index');
    }

    //return the about page
    public function about(){

        return view('pages.about');

    }
}
