<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiteur; // Import the Visiteur model

class SeConnecter extends Controller
{
    public function connexion(){
        return view('connexion');
    }

    public function formulaire(Request $request){
        $credentials = $request->only('login', 'mdp');
        $bruh = Visiteur::where("login", $credentials['login'])->get()->first();

        if ($bruh && $credentials['mdp'] == $bruh->mdp) {
            session(['bruh' => $bruh]); // Store $bruh in the session
            return redirect()->route('authentifier');
        } else {
            return view('connexion');
        }
    }
    
}
