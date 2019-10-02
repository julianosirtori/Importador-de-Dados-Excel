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


use Illuminate\Support\Facades\Route;

Route::get('/', 'ExcelController@index')->name('home');
Route::post('/', 'ExcelController@exibeTabela')->name('exibetabela');
Route::post('/importa/tados', 'ExcelController@importaDados')->name('importadados');


