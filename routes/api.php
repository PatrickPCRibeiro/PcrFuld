<?php

use App\Http\Controllers\Bulk;
use App\Http\Controllers\BulkController;
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

//Alternatives_units
/* não precisa ter rota própria, em outras tabelas seram adicionadas mais rotas
para acessar os campos de orders_items

Route::get('alternatives_units',[AlternativeUnitController::class,'index']);
Route::get('alternatives_units/{??}',[AlternativeUnitController::class,'show']);
Route::post('alternatives_units',[AlternativeUnitController::class,'store']);
Route::put('alternatives_units/{??}',[AlternativeUnitController::class,'update']);
Route::delete('alternatives_units/{??}',[AlternativeUnitController::class,'delete']);
*/

//Bulks
Route::get('bulks',[BulkController::class, 'index']);
Route::get('bulks/{slug}', [BulkController::class,'show']);
Route::post('bulks', [BulkController::class,'store']);
Route::put('bulks/{slug}',[BulkController::class,'update']);
Route::delete('bulks/{slug}',[BulkController::class,'delete']);

