<?php

use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\SetorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoDocumentoController;

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

Route::get('/',  [DocumentoController::class, 'telaListarDocumento']);


//ROTAS SETOR INICIO
Route::get('/setor/cadastro', [SetorController::class, 'telaCadastro']);

Route::post('/setor/salvar', [SetorController::class, 'salvar']);

Route::get('/setor/listar', [SetorController::class, 'telaListar']);

Route::post('/setor/deletar/{id}', [SetorController::class, 'deletar']);

Route::get('/setor/atualizar/{id}', [SetorController::class, 'telaAtualizar']);

Route::post('/setor/editar/{id}', [SetorController::class, 'editar']);
//ROTAS SETOR FIM

//ROTAS TIPO DOCUMENTO INICIO
Route::get('/tipodocumento/cadastro',[TipoDocumentoController::class, 'telaTipoDocumento']);

Route::post('/tipodocumento/salvar', [TipoDocumentoController::class, 'salvar']);

Route::get('/tipodocumento/listar', [TipoDocumentoController::class, 'telaListarTipoDocumento']);

Route::post('/tipodocumento/deletar/{id}', [TipoDocumentoController::class, 'deletar']);

Route::get('/tipodocumento/atualizar/{id}', [TipoDocumentoController::class, 'telaAtualizarTipoDocumento']);

Route::post('/tipodocumento/editar/{id}', [TipoDocumentoController::class, 'editar']);
//ROTAS TIPO DOCUMENTO FIM

//ROTAS DOCUMENTO INICIO
Route::get('/documento/cadastro',[DocumentoController::class, 'telaDocumento']);

Route::post('/documento/salvar', [DocumentoController::class, 'salvar']);

Route::get('/documento/listar', [DocumentoController::class, 'telaListarDocumento']);

Route::get('/documento/enviarTramitacao/{id}', [DocumentoController::class, 'telaEnviarTramitacao']);

Route::post('/documento/enviarTramitacao', [DocumentoController::class, 'enviarTramitacao']);

Route::get('/documento/receberTramitacao/{id}', [DocumentoController::class, 'telaReceberTramitacao']);

Route::post('/documento/receberTramitacao', [DocumentoController::class, 'receberTramitacao']);

//ROTAS DOCUMENTO FIM
