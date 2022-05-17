<?php

use App\Http\Controllers\AnneController;
use App\Http\Controllers\BilanController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\EmargementController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\SpecialiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('enseignant', EnseignantController::class)->names('enseignant');

Route::resource('filiere', FiliereController::class)->names('filiere');

Route::resource('niveau', NiveauController::class)->names('niveau');

Route::resource('annee_academique', AnneController::class)->names('annee');

Route::resource('cycle', CycleController::class)->names('cycle');

Route::resource('specialite', SpecialiteController::class)->names('specialite');

Route::resource('matieres', MatiereController::class)->names('matieres');

Route::resource('emargement', EmargementController::class)->names('emargement');

Route::resource('bilan', BilanController::class)->names('bilan');
