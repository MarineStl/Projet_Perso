<?php

use App\Http\Controllers\CommandeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
