<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//App\Http\Controllers\Api\V1\InvoiceController

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

// api/v1
//Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1', 'middleware' => 'auth:sanctum'], function(){
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function(){
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('companies', CompanyController::class);
    Route::apiResource('employees', EmployeeController::class);
    Route::post('invoices/bulk', ['uses' => 'InvoiceController@bulkStore']);
});