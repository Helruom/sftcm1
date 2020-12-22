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

/**
 * View Teste
 */
Route::get('/index', [PadraoController::class,'index']);
/**
 * Views do Sistema
 */
Route::get('/', [PadraoController::class, 'incio']);
/**
 * Clientes
 */
Route::get('/clientes', [PadraoController::class, 'clientes']);
/**
 * Fornecedores
 */
Route::get('/fornecedores', [PadraoController::class, 'fornecedores']);
/**
 * Mercadorias
 */
Route::get('/mercadorias', [PadraoController::class, 'mercadorias']);
Route::get('/mercadorias/{mercadorias}',[PadraoController::class, 'showMercadoria']);
/**
 * Usuarios
 */
Route::get('/usuarios', [PadraoController::class, 'usuarios']);
/**
 * Vendas
 */
Route::get('/vendas', [PadraoController::class, 'vendas']);
