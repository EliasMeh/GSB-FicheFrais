<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FicheFrais;
use App\Models\Visiteur;
use App\Models\LigneFraisForfait;
use App\Models\LigneFraisHorsForfait;


class RenseignerFicheFrais extends Controller
{
    public function renseignerFFForm()
    {
        // You may need to pass data to the view, such as the currently logged-in user (visiteur)
        // You can fetch the current user data however you have implemented authentication in your application
        $visiteur = auth()->user(); // Example: fetching the currently authenticated user

        return view('renseignerff', ['visiteur' => $visiteur]);
    }

    public function submitRenseignerff(Request $request)
    {

        $bruh = session('bruh'); // Retrieve bruh from the session
        #dd($request->all());

        if ($bruh) {
            // Create FicheFrais record
            $ficheFrais = FicheFrais::create([
                'idVisiteur' => $bruh->id,
                'moisannee' => $request->month . '-' . $request->year, // Format moisannee as XX-XXXX
                'nbJustificatifs' => $request->nbJustificatifs,
                'montantValide' => $request->montantValide,
                'dateModif' => today()->format('Y-m-d'), // Use today's date as the default value for dateModif
                'idEtat' => 'CL', // Set the default value for idEtat
            ]);
    
            // Create LigneFraisForfait records for each type of frais
            $fraisTypes = ['REP' => 'repas_midi', 'NUI' => 'nuitees', 'ETP' => 'etape', 'KM' => 'km'];
            foreach ($fraisTypes as $idFraisForfait => $fraisType) {
                if ($request->filled($fraisType)) {
                    LigneFraisForfait::create([
                        'idVisiteur' => $bruh->id,
                        'moisannee' => $request->month . '-' . $request->year, // Format moisannee as XX-XXXX
                        'idFraisForfait' => $idFraisForfait, // Use the short form
                        'quantite' => $request->$fraisType,
                        // Add other fields as needed
                    ]);
                }
            }
    
            // Create LigneFraisHorsForfait record if needed
            if ($request->filled('date_hf') || $request->filled('libelle_hf') || $request->filled('quantite_hf')) {
                LigneFraisHorsForfait::create([
                    'idVisiteur' => $bruh->id,
                    'moisannee' => $request->month . '-' . $request->year, // Format moisannee as XX-XXXX
                    'date' => $request->date_hf,
                    'libelle' => $request->libelle_hf,
                    'quantite' => $request->quantite_hf,
                    // Add other fields as needed
                ]);
            }
    
            return back()->with('success', 'Fiche de frais submitted successfully.');
        } else {
            return back()->withErrors(['user' => 'No user found in the session.']);
        }
    }
}
