<?php

use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\NiveauController;
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
});

Route::resource('enseignant', EnseignantController::class)->names('enseignant');

Route::resource('filiere', FiliereController::class)->names('filiere');

Route::resource('niveau', NiveauController::class)->names('niveau');
