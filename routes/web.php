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

Route::get('/', function () {
  return view('home');
});

Route::get('/dados', function () {
  return view('dados');
});

//Route::post('/dados/submit', 'DadosController@submit');

Route::get('/exames', function () {
  return view('exames');
});

Route::get('/hemograma', function () {

  $hemograma = DB::table('hemogramas')->get();

  return view('hemograma', ['hemograma' => $hemograma]);
});

Route::get('/hemograma/create', 'HemogramaController@create');

Route::get('/hemograma/{id}', 'HemogramaController@show');

Route::get('/hemograma/todos', 'HemogramaController@index');

Route::post('/hemograma', 'HemogramaController@store');

Route::get('/utentes', function () {
  return view('utentes');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
