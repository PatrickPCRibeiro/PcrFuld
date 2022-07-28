<?php

use App\Http\Controllers\Bulk;
use App\Http\Controllers\BulkController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockLocationController;
use App\Http\Controllers\TypePaymentController;
use App\Http\Controllers\UserController;
use App\Models\StockLocation;
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

//Users
Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);
Route::post('users',[UserController::class,'store']);
Route::put('users/{id}',[UserController::class,'update']);
Route::delete('users/{id}',[UserController::class,'delete']);

/* 
//password_resets
não precisa ter rota própria?
*/

/* 
//failed_jobs
não precisa ter rota própria?
*/

/* 
//personal_access_tokens
não precisa ter rota própria?
*/

//Categories
Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{id}',[CategoryController::class,'update']);
Route::delete('categories/{id}',[CategoryController::class,'delete']);

//Bulks
Route::get('bulks',[BulkController::class, 'index']);
Route::get('bulks/{slug}', [BulkController::class,'show']);
Route::post('bulks', [BulkController::class,'store']);
Route::put('bulks/{slug}',[BulkController::class,'update']);
Route::delete('bulks/{slug}',[BulkController::class,'delete']);

/* 
//AlternativeUnits
não precisa ter rota própria, em outras tabelas seram adicionadas mais rotas
para acessar os campos de AlternativesUnits 
*/

//Products
Route::get('products',[ProductController::class,'index']);
Route::get('products/{id}',[ProductController::class,'show']);
Route::post('products',[ProductController::class,'store']);
Route::put('products/{id}',[ProductController::class,'update']);
Route::delete('products/{id}',[ProductController::class,'delete']);
//Route::delete('products/{id}/alternative_units',[ProductsController::class,'ListAlternativeUnits']);

//StocksLocations
Route::get('stocks_locations',[StockLocationController::class,'index']);
Route::get('stocks_locations/{id}',[StockLocationController::class,'show']);
Route::post('stocks_locations',[StockLocationController::class,'store']);
Route::put('stocks_locations/{id}',[StockLocationController::class,'update']);
Route::delete('stocks_locations/{id}',[StockLocationController::class,'delete']);

// regra de negocio mencionada no video 3
//Stocks
Route::get('stocks',[StockController::class,'index']);

//TypePayments
Route::get('type_payments',[TypePaymentController::class,'index']);
Route::get('type_payments/{id}',[TypePaymentController::class,'show']);
Route::post('type_payments',[TypePaymentController::class,'store']);
Route::put('type_payments/{id}',[TypePaymentController::class,'update']);
Route::delete('type_payments/{id}',[TypePaymentController::class,'delete']);

/* 
//user_has_customers
não precisa ter rota própria?
*/

//Customers
Route::get('customers',[CustomerController::class,'index']);
Route::get('customers/{id}',[CustomerController::class,'show']);
Route::post('customers',[CustomerController::class,'store']);
Route::put('customers/{id}',[CustomerController::class,'update']);
Route::delete('customers/{id}',[CustomerController::class,'delete']);

/* 
//order_items
não precisa ter rota própria?
*/

//Orders
Route::get('orders',[OrderController::class,'index']);
Route::get('orders/{id}',[OrderController::class,'show']);
Route::post('orders',[OrderController::class,'store']);
Route::put('orders/{id}',[OrderController::class,'update']);
Route::delete('orders/{id}',[OrderController::class,'delete']);


//districts
Route::get('districts',[DistrictController::class,'index']);
Route::get('districts/{id}',[DistrictController::class,'show']);
Route::post('districts',[DistrictController::class,'store']);
Route::put('districts/{id}',[DistrictController::class,'update']);
Route::delete('districts/{id}',[DistrictController::class,'delete']);

//cities
Route::get('cities',[CityController::class,'index']);
Route::get('cities/{id}',[CityController::class,'show']);
Route::post('cities',[CityController::class,'store']);
Route::put('cities/{id}',[CityController::class,'update']);
Route::delete('cities/{id}',[CityController::class,'delete']);

//countries
Route::get('countries',[CountryController::class,'index']);
Route::get('countries/{id}',[CountryController::class,'show']);
Route::post('countries',[CountryController::class,'store']);
Route::put('countries/{id}',[CountryController::class,'update']);
Route::delete('countries/{id}',[CountryController::class,'delete']);

//states
Route::get('states',[StateController::class,'index']);
Route::get('states/{id}',[StateController::class,'show']);
Route::post('states',[StateController::class,'store']);
Route::put('states/{id}',[StateController::class,'update']);
Route::delete('states/{id}',[StateController::class,'delete']);



/* não precisa ter rota própria, em outras tabelas seram adicionadas mais rotas
para acessar os campos de UseHasCustomers
//UseHasCustomers
Route::get('user_has_customers',[UserHasCustomerController::class,'index']);
Route::get('user_has_customers/{??}',[UserHasCustomerController::class,'show']);
Route::post('user_has_customers',[UserHasCustomerController::class,'store']);
Route::put('user_has_customers/{??}',[UserHasCustomerController::class,'update']);
Route::delete('user_has_customers/{??}',[UserHasCus tomerController::class,'delete']);
*/

/* não precisa ter rota própria, em outras tabelas seram adicionadas mais rotas
para acessar os campos de AlternativesUnits
//AlternativesUnits
Route::get('alternatives_units',[AlternativeUnitController::class,'index']);
Route::get('alternatives_units/{??}',[AlternativeUnitController::class,'show']);
Route::post('alternatives_units',[AlternativeUnitController::class,'store']);
Route::put('alternatives_units/{??}',[AlternativeUnitController::class,'update']);
Route::delete('alternatives_units/{??}',[AlternativeUnitController::class,'delete']);
*/


/* não precisa ter rota própria, em outras tabelas seram adicionadas mais rotas
para acessar os campos de orders_items
//OrdersItems
Route::get('orders_items',[OrderItemController::class,'index']);
Route::get('orders_items/{seq}',[OrderItemController::class,'show']);
Route::post('orders_items',[OrderItemController::class,'store']);
Route::put('orders_items/{seq}',[OrderItemController::class,'update']);
Route::delete('orders_items/{seq}',[OrderItemController::class,'delete']);
*/