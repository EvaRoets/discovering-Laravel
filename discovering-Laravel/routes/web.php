<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
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


Route::get('/', [Controller::class, 'index'])->name('welcome');

Route::get('home', [HomeController::class, 'show'])->name('home');

Route::get('form', [FormController::class, 'index'])->name('form');

Route::post('form', [FormController::class, 'validateForm']);
