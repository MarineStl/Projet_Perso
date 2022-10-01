<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\GoogleController;
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
Route::controller(CommandeController::class)->group(function () {

    Route::get('/commande/list', 'list');
    Route::get('/commande/create', 'create');
    Route::get('/commande/{id}', 'show');
    Route::get('/commande/{id}/edit', 'edit');


    Route::post('/commande', 'store');
    Route::patch('/commande/{id}', 'update');
    Route::delete('/commande/{id}', 'destroy');

});

Route::controller(ProduitController::class)->group(function () {

    Route::get('/produit/list', 'list');
    Route::get('/produit/categories', 'categories');
    Route::get('/produit/create', 'create');
    Route::get('/produit/{id}', 'show');
    Route::get('/produit/{id}/edit', 'edit');
    


    Route::post('/produit', 'store');
    Route::patch('/produit/{id}', 'update');
    Route::delete('/produit/{id}', 'destroy');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('google-autocomplete', [GoogleController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
