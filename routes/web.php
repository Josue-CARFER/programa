<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Hola', function () {
    return 'Hola Usfa';
});

Route::get('user/{id}', function ($id) {
    return 'Hola ' . $id ." como estas XD";
});
Route::get('pro' , function(){
    return view('bienvenido');
});

/*Route::get('cal' , function(){
    return view('calculadora');
});*/


Route::get('extriangulo', 'TrianguloController@extriangulo');
Route::post('soluciontri', ['as' => 'extriangulo.soluciontri', 'uses' => 'TrianguloController@soluciontri']);

Route::get('calculadora', 'CalculadoraController@calculadora');
Route::post('solucionsuma', ['as' => 'calculadora.solucionsuma', 'uses' => 'CalculadoraController@solucionsuma']);
