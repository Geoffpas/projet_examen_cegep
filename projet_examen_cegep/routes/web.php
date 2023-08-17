<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\FaitController;
use Illuminate\Support\Facades\Route;

/*****************
 * ACCUEIL
 */
Route::get("/", [AccueilController::class, "index"])
    ->name("accueil");

/*****************
 * LISTE DES FAITS
 */
Route::get('/faits', [FaitController::class, 'index'])
    ->name('faits.index');

/*****************
 * affichage du formulaire d'ajout de "fait"
 */
Route::get('/faits/create', [FaitController::class, 'create'])
    ->name('faits.create');

/*****************
 * traitement du formulaire d'ajout de "fait"
 */
Route::post('/faits', [FaitController::class, 'store'])
    ->name('faits.store');

/*****************
 * Affichage du formulaire de modification d'un fait
 */
Route::get("/faits/edit/{id}", [FaitController::class, 'edit'])
    ->name('faits.edit');

/*****************
 * Traitement du formulaire de modification
 */
Route::post("/faits/update", [FaitController::class, 'update'])
    ->name('faits.update');

/*****************
 * Traitement de la suppression
 */
Route::post("/faits/destroy", [FaitController::class, 'destroy'])
    ->name('faits.destroy');
