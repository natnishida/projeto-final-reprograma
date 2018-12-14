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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projetojuntas', 'FunctionController@projetojuntas')->name('projetojuntas');

Route::get('/guardaresultados', 'FunctionController@guardaresultados')->name('guardaresultados');
Route::post('/guardaresultados', 'FunctionController@guardaresultados')->name('guardaresultados');

Route::get('/resultados', 'FunctionController@mostraresultados')->name('mostraresultados');
Route::post('/resultados', 'FunctionController@mostraresultados')->name('mostraresultados');

Route::get('/contato', 'FunctionController@enviacontato')->name('contato');
Route::post('/contato', 'FunctionController@enviacontato')->name('contato');
