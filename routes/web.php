<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
<<<<<<< HEAD
Route::resource('pokemons','PokemonsController')->middleware('auth');
Route::get('pokemons/delete/{pokemon}', 'PokemonsController@destroy');
Route::resource('objetos','ObjetosController');
Route::get('objetos/delete/{objeto}', 'ObjetosController@destroy');
Route::resource('tipos','TiposController');
Route::get('tipos/delete/{tipo}', 'TiposController@destroy');
=======

Route::resource('pokemons', 'PokemonsController')->middleware('auth');

>>>>>>> master
require __DIR__.'/auth.php';
