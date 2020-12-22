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
//Route::get('/',function(){return view('auth/login');});

//Route Accueil
Route::get('/', 'AccueilController@index')->name('acceuil.index');

//Route Articles
Route::get('article/index','ArticleController@index')->name('article.index');
Route::get('article/create','ArticleController@create')->name('article.create');
Route::post('article/store','ArticleController@store')->name('article.store');

//Route Auteur
Route::resource('/auteur','AuteurController');
Route::get('auteur/create','AuteurController@create')->name('auteur.create');
Route::post('auteur/store','AuteurController@store')->name('auteur.store');



