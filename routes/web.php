<?php

use App\Http\Controllers\Frontend;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// FRONTEND --------------------------------------------------------------
Route::get('/', [Frontend::class, 'index'])->name('home');
Route::get('/exhibitor_form', [Frontend::class, 'exhibitor_form'])->name('exhibitor_form');
Route::get('/exhibitor_list', [Frontend::class, 'exhibitor_list'])->name('exhibitor_list');
Route::get('/about', [Frontend::class, 'about'])->name('about');
Route::get('/login', [Frontend::class, 'login'])->name('login');

Route::post('/input_exhibitor', [Frontend::class, 'input_exhibitor'])->name('input_exhibitor');
