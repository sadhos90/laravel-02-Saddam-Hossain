<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');

Route::get('/team/dettaglio/{id}', [PublicController::class, 'dettaglioTeam'])->name('dettaglioTeam');

Route::get('/dettaglio/{name}', [PublicController::class, 'dettaglioViaggi'])->name('dettaglio');

Route::get('/destinazioni', [PublicController::class, 'destinazioni'])->name('destinazioni');
