<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
//Inicio
Route::get('/', function () {
    return view('Auth.login');
})->name('inicio');
//Autenticação
Route::post('/auth', [LoginController::class,'authenticate'])->name('auth.user');
Route::get('/logout', function () {
    //return view('org');
    Auth::logout();
    return redirect()->route('inicio');
})->name('logout');
//Home depois de logado
Route::get('/home', function () {
    return view('home');
})->name('home');
//Plano
Route::get('/planos/{id_cliente}', 'App\Http\Controllers\PlanoController@index')->name('plano')->middleware("auth");
Route::post('/getTablePanos', 'App\Http\Controllers\PlanoController@getTableAjax')->name('planoTable')->middleware("auth");
/*Route::get('/plano', function () {
    return view('org');
})->name('org');*/
//sobre
Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');
//contado
Route::get('/contato', function () {
    return view('contato');
})->name('contato');

