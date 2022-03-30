<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $Movies = Movie::all();
        return view('home', ['Movies'=> $Movies]);
    }
}
