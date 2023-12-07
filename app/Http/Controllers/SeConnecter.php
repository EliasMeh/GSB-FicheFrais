<?php

namespace App\Http\Controllers;
use App\Models\Visiteur;

use Illuminate\Http\Request;

class SeConnecter extends Controller
{
    public function connexion(){
		return view('connexion');
	}
	public function formulaire(Request $request){
		$login = $request->input('login') ;
		$password = $request->input('password');
		$visiteur = Visiteur::where('login', $login)->first();
		//if (!$visiteur){
		//}
		//else{
		//	return $connexion = False ;
		//}
		if(is_object($visiteur) && password_verify($password, $visiteur->mdp)){
			return "prout";
		}
		else{
			return "Adresse login est " . $request->input('login') . $request->input('password');
		}
	}
}
