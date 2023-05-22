<?php

use App\Http\Controllers\TestController;
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


Route::post('/form', [TestController::class, 'formAction']);
Route::post('/header', [TestController::class, 'headerAction']);
Route::get('/page', [TestController::class, 'pageAction']);
Route::get('/json', [TestController::class, 'jsonAction']);
Route::post('/file', [TestController::class, 'fileAction']);
Route::post('/save', [TestController::class, 'saveAction']);
Route::get('/setcookie', [TestController::class, 'setCookie']);
Route::post('/submit', [TestController::class, 'submitAction']);