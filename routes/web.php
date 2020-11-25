<?php

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

//Route pour la page authentification
Route::get('/',function(){return view('auth/login');});
//Route home
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route chèque
Route::resource('/cheque', 'ChequeController');
Route::get('/cheque/{idCheq}/edit', 'ChequeController@edit')->name('cheque.edit');
Route::post('/cheque/{idCheq}/update', 'ChequeController@update')->name('cheque.update');
//Route tableau de bord
Route::get('/bord', 'BordController@index')->name('bord');



