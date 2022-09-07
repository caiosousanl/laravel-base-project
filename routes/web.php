<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/clients',[ClientController::class, 'index']);
Route::get('/client/create',[ClientController::class, 'create']);
Route::post('/client',[ClientController::class, 'store']);
Route::post('/clients/destroy/{id}',[ClientController::class, 'destroy']);
Route::get('/client/{id}/edit',[ClientController::class, 'edit']);
Route::post('/client/{id}',[ClientController::class, 'update']);

require __DIR__ . '/auth.php';
