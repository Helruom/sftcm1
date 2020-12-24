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
Route::get('/clientes/cliente_criar',[PadraoController::class, 'createCliente']);
Route::get('/clientes/cliente_editar/{id}',[PadraoController::class, 'editCliente']);
Route::get('/clientes/{id}', [PadraoController::class, 'destroyCliente']);
Route::post('/clientes/nova',[PadraoController::class, 'storeCliente']);
Route::put('/clientes/cliente_editar',[PadraoController::class, 'updateCliente']);
/**
 * Fornecedores
 */
Route::get('/fornecedores', [PadraoController::class, 'fornecedores']);
Route::get('/fornecedores/fornecedor_criar',[PadraoController::class, 'createFornecedor']);
Route::get('/fornecedores/fornecedor_editar/{id}',[PadraoController::class, 'editFornecedor']);
Route::get('/fornecedores/{id}', [PadraoController::class, 'destroyFornecedor']);
Route::post('/fornecedores/nova',[PadraoController::class, 'storeFornecedor']);
Route::put('/fornecedores/fornecedor_editar',[PadraoController::class, 'updateFornecedor']);
/**
 * Mercadorias
 */
Route::get('/mercadorias', [PadraoController::class, 'mercadorias']);
Route::get('/mercadorias/mercadoria_criar',[PadraoController::class, 'createMercadoria']);
Route::get('/mercadorias/mercadoria_editar/{id}',[PadraoController::class, 'editMercadoria']);
Route::get('/mercadorias/{id}', [PadraoController::class, 'destroyMercadoria']);
Route::post('/mercadorias/nova',[PadraoController::class, 'storeMercadoria']);
Route::put('/mercadorias/mercadoria_editar',[PadraoController::class, 'updateMercadoria']);
/**
 * Usuarios
 */
Route::get('/usuarios', [PadraoController::class, 'usuarios']);
Route::get('/usuarios/usuario_criar',[PadraoController::class, 'createUsuario']);
Route::get('/usuarios/usuario_editar/{id}',[PadraoController::class, 'editUsuario']);
Route::get('/usuarios/{id}', [PadraoController::class, 'destroyUsuario']);
Route::post('/usuarios/nova',[PadraoController::class, 'storeUsuario']);
Route::put('/usuarios/usuario_editar',[PadraoController::class, 'updateUsuario']);
/**
 * Vendas
 */
Route::get('/vendas', [PadraoController::class, 'vendas']);
Route::get('/vendas/venda_criar',[PadraoController::class, 'createVenda']);
Route::get('/vendas/venda_editar/{id}',[PadraoController::class, 'editVenda']);
Route::get('/vendas/{id}', [PadraoController::class, 'destroyVenda']);
Route::post('/vendas/nova',[PadraoController::class, 'storeVenda']);
Route::put('/vendas/venda_editar',[PadraoController::class, 'updateVenda']);