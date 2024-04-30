<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Accueil;

use App\Http\Controllers\SeConnecter;

use App\Http\Controllers\SuivrePaiementFF;

use App\Http\Controllers\ValiderFicheFrais;

use App\Http\Controllers\ConsulterFicheFrais;

use App\Http\Controllers\RenseignerFicheFrais;

use App\Http\Controllers\Authentifier;

use App\Http\Controllers\SuivreFF;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::fallback([Accueil::class, 'index']);

Route::get('/',[Accueil::class, 'index']);


Route::get('/seconnecter', [SeConnecter::class, 'connexion'])->name('seconnecter');

Route::post('/connexion', [SeConnecter::class,  'formulaire']);

Route::get('/authentifier', [Authentifier::class,  'index'])->name('authentifier');

Route::get('/visiteurM/renseignerFF', [RenseignerFicheFrais::class, 'renseignerFFForm'])->name('renseignerFF');

Route::post('/submit-renseignerff', [RenseignerFicheFrais::class, 'submitRenseignerFF']);

Route::get('/visiteurM/consulterFF',[ConsulterFicheFrais::class, 'index']);

Route::get('/visiteurM/validerFF', [ValiderFicheFrais::class, 'index'])->name('validerFF');

Route::post('/visiteurM/validerFF', [ValiderFicheFrais::class, 'store']);

Route::post('/recherche', [ValiderFicheFrais::class, 'index2'])->name('RecupFF');

Route::post('/validation', [ValiderFicheFrais::class, 'validation'])->name('validation');


Route::get('/visiteurM/suivreFF',[SuivrePaiementFF::class, 'index'])-> name('suivreFF');

 