<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiteur; // Import the Visiteur model

	class Authentifier extends Controller
	{
	
	public function index(){
		$bruh = session('bruh');
		#$bruh = session('bruh')->id ; // Retrieve $bruh from the session
		return view('accueilauth')->with('bruh', $bruh);
	}
	
}
