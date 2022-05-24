<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customer/{customer_id}', [CustomerController::class, 'show']);
Route::get('/customer/{customer_id}/update', [CustomerController::class, 'update']);
Route::get('/customer/{customer_id}/delete', [CustomerController::class, 'destroy']);
