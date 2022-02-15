<?php

use App\Http\Controllers\ImovelController;
use App\Http\Controllers\InteressadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




//get
Route::get('imovels/', [ImovelController::class, 'getImovel'])->name('imoveis');

//cadastro
Route::post('addimovels/', [ImovelController::class, 'addImovel'])->name('addimoveis');

//atualizar
Route::put('updateimovels/{id}', [ImovelController::class, 'updateImovel'])->name('updateimoveis');

//deletar
Route::delete('deleteimovels/{id}', [ImovelController::class, 'deleteImovel'])->name('deleteinteressados');




//Ler
Route::get('interessados/', [InteressadoController::class, 'getInteressado'])->name('interessados');

//cadastro
Route::post('addinteressados/', [InteressadoController::class, 'addInteressado'])->name('addinteressados');

//atualizar
Route::put('updateinteressados/{id}', [InteressadoController::class, 'updateInteressado'])->name('updateinteressados');

//deletar
Route::delete('deleteinteressados/{id}', [InteressadoController::class, 'deleteInteressado'])->name('deleteinteressados');
