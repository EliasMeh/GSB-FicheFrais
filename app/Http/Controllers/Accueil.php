<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Accueil extends Controller
{
    public function index(){
		return view('Accueil') ;
	}
}
