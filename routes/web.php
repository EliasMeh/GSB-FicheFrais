<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Accueil;

use App\Http\Controllers\SeConnecter;

use App\Http\Controllers\SuivrePaiementFF;

use App\Http\Controllers\ValiderFicheFrais;

use App\Http\Controllers\ConsulterFicheFrais;

use App\Http\Controllers\RenseignerFicheFrais;

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

Route::get('/seconnecter',[SeConnecter::class, 'connexion']);
Route::post('/connexion', [SeConnecter::class,  'formulaire']);

Route::get('/visiteurM/renseignerFF',[RenseignerFicheFrais::class, 'index']);

Route::get('/visiteurM/consulterFF',[ConsulterFicheFrais::class, 'index']);

Route::get('/comptable/validerFF',[ValiderFicheFrais::class, 'index']);

Route::get('/comptable/suivrepaiementFF',[SuivrePaiementFF::class, 'index']);
