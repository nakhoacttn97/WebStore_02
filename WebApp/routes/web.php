<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route for Brand
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/add', [BrandController::class, 'add']);
Route::post('/brand/add', [BrandController::class, 'add']);
Route::get('brand/details/{id}', [BrandController::class, 'details']);
Route::get('/brand/delete/{id}', [BrandController::class, 'delete']);