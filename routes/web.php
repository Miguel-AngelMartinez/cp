<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\codigopostal_controller;

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

Route::get('/',[codigopostal_controller::class, 'index'])->name('index2');
Route::post('/index',[codigopostal_controller::class, 'index2'])->name('index');
Route::post('/index3',[codigopostal_controller::class, 'index3'])->name('index3');
