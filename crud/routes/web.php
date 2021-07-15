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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/cliente/novo', 'ClientesController@create');
Route::post('/cliente/novo', 'ClientesController@store')->name('salvar_cliente');
Route::get('/clientes/ver', 'ClientesController@show');
Route::get('/cliente/del/{id}', 'ClientesController@destroy')->name('excluir_cliente');
Route::get('/cliente/edit/{id}', 'ClientesController@edit')->name('editar_cliente');


require __DIR__.'/auth.php';
