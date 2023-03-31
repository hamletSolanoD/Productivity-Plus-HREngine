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
    Route::apiResource('employers', EmployerController::class);
    Route::apiResource('employees', EmployeeController::class);
    Route::apiResource('employeefiles', EmployeeFileController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('workdays', WorkdayController::class);
    Route::apiResource('activities', ActivityController::class);
    Route::apiResource('activityfiles', ActivityFileController::class);
    Route::post('users/login', ['uses' => 'UserController@userLogin']);
    Route::post('invoices/bulk', ['uses' => 'InvoiceController@bulkStore']);
    Route::post('employees/get', ['uses' => 'EmployeeController@getEmployees']);
    Route::post('employees/getActivity', ['uses' => 'EmployeeController@getActivities']);
    Route::post('employeefiles/get', ['uses' => 'EmployeeFileController@getFiles']);
    Route::post('workdays/getByEmployeer', ['uses' => 'WorkdayController@getWorkdaysByEmployeer']);
    Route::post('workdays/get', ['uses' => 'WorkdayController@getWorkday']);
    Route::post('workdays/in', ['uses' => 'WorkdayController@inWorkday']);
    Route::post('workdays/out', ['uses' => 'WorkdayController@outWorkday']);
    Route::post('workdays/out', ['uses' => 'WorkdayController@outWorkday']);
    Route::post('activities/get', ['uses' => 'ActivityController@getActivities']);
    Route::post('activities/start', ['uses' => 'ActivityController@startActivity']);
    Route::post('activities/end', ['uses' => 'ActivityController@endActivity']);
    Route::post('activityfiles/get', ['uses' => 'ActivityFileController@getFiles']);
});