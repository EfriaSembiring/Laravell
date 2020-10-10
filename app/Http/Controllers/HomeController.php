<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Artikel;

class HomeController extends Controller
{
    public function home(){
    	$artikel = Artikel::all();
    	return view('Home', ['article'=> $article]); 

    }
    public function homeboot(){
    	return view('bootstrap.home');
    }

    public function full(){
    return view('Home');
    }
}
