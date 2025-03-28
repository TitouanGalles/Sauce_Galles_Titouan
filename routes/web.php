<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/utilisateur/index', 'App\Http\Controllers\UtilisateurController@index')->name('utilisateur.index');
Route::get('/utilisateur/create', 'App\Http\Controllers\UtilisateurController@create')->name('utilisateur.create');
Route::get('/utilisateur/show', 'App\Http\Controllers\UtilisateurController@show')->name('utilisateur.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sauce/index', 'App\Http\Controllers\SauceController@index')->name('sauce.index');
Route::get('/sauce/create', 'App\Http\Controllers\SauceController@create')->name('sauce.create');
Route::get('/sauce/show/{id}', 'App\Http\Controllers\SauceController@show')->name('sauce.show');
Route::get('/sauce/edit/{id}', 'App\Http\Controllers\SauceController@edit')->name('sauce.edit');
Route::delete('/sauce/destroy/{id}', 'App\Http\Controllers\SauceController@destroy')->name('sauce.destroy');
Route::post('/sauce/store', 'App\Http\Controllers\SauceController@store')->name('sauce.store');
Route::put('/sauce/update/{id}', 'App\Http\Controllers\SauceController@update')->name('sauce.update');