<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadraoController as PadraoController;

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
    return view('incio_1');
});
Route::get('/vendas', function(){
    return view('vendas');
});
Route::get('/mercadorias', function(){
    return view('mercadorias');
});
Route::get('/fornecedores', function(){
    return view('fornecedores');
});
Route::get('/clientes', function(){
    return view('clientes');
});
Route::get('/usuarios', function(){
    return view('usuarios');
});
/**
 * Realização de testes manuais
 */
Route::get('/index', [PadraoController::class,'index']);