<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FicheFrais;
use App\Models\Visiteur;
use App\Models\LigneFraisForfait;
use App\Models\FraisForfait;
use App\Models\LigneFraisHorsForfait;

class ConsulterFicheFrais extends Controller
{
    public function index(){
		$bruh = session('bruh'); // Retrieve bruh from the session
	
		if ($bruh) {
			$ficheFrais = FicheFrais::where('idVisiteur', $bruh->id)->get(); // Get FicheFrais records for the current user
			$fraisForfait = FraisForfait::all();
			$ligneFraisForfait = LigneFraisForfait::where('idVisiteur', $bruh->id)->get();
			$ligneFraisHorsForfait = LigneFraisHorsForfait::where('idVisiteur', $bruh->id)->get();

	
			return view('consulterff')->with([
				'ficheFrais' => $ficheFrais,
				'ligneFraisForfait' => $ligneFraisForfait,
				'fraisForfait' => $fraisForfait,
				'ligneFraisHorsForfait' => $ligneFraisHorsForfait
			]);
		} else {
			return back()->withErrors(['user' => 'No user found in the session.']);
		}
	}

}