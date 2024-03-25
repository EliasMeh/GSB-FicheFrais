<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FicheFrais;
use App\Models\Visiteur;


class ValiderFicheFrais extends Controller
{
	public function index()
{
    // Pass the FicheFrais records to the view
    return view('validerFF');
}

	public function index2(Request $request)
{
    #dd($request->all());
    $idVisiteur = $request->input('idVisiteur');
    $moisannee = $request->input('mois') . '-' . $request->input('annee');

    $ficheFrais = FicheFrais::where('idVisiteur', $idVisiteur)
    ->where('moisannee', $moisannee)
    ->get();
    return view('validerFF', ['ficheFrais' => $ficheFrais]);

}
    public function validation(Request $request)
{
    $idVisiteur = $request->input('idVisiteur');
    $moisannee = $request->input('moisannee');

    FicheFrais::where('idVisiteur', $idVisiteur)
        ->where('moisannee', $moisannee)
        ->update(['idEtat' => 'VA']);

    $ficheFrais = FicheFrais::where('idVisiteur', $idVisiteur)
        ->where('moisannee', $moisannee)
        ->get();

    return view('validerFF', ['ficheFrais' => $ficheFrais]);
}
}
