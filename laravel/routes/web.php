<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'main']);
Route::get('/produtos', [ContactController::class, 'main']);
Route::get('/produto/{nome}/{id}', [ProductController::class, 'main'])->where('nome', '[A-Za-z]+')->where('id', '[0-9]+');
Route::get('/contato', [ContactController::class, 'main']);
Route::get('/sobre-nos', [AboutUsController::class, 'main']);
