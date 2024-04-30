<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FicheFrais;


class SuivrePaiementFF extends Controller
{
    public function index()
{
    $ficheFrais = FicheFrais::where('idEtat', 'VA')->get();
  	return view('suivreFF', ['ficheFrais' => $ficheFrais]);
}
}
