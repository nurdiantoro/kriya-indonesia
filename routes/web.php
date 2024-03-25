<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend;
use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('event:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('cache:clear');

    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('event:cache');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('view:cache');
    return 'DONE'; //Return anything
});

// FRONTEND --------------------------------------------------------------
Route::get('/', [Frontend::class, 'index'])->name('home');
Route::get('/exhibitor_form', [Frontend::class, 'exhibitor_form'])->name('exhibitor_form');
Route::get('/exhibitor_list', [Frontend::class, 'exhibitor_list'])->name('exhibitor_list');
Route::get('/about', [Frontend::class, 'about'])->name('about');
Route::get('/exhibitor_form-a', [Frontend::class, 'exhibitor_form_a'])->name('exhibitor_form_a');

// Auth-------------------------------------------------------------------
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login_view'])->name('login_view');
    Route::get('/register', [AuthController::class, 'register_view'])->name('register_view');
    Route::get('/register_admin', [AuthController::class, 'register_admin'])->name('register_admin');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// BACKEND----------------------------------------------------------------
Route::middleware('auth')->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [Backend::class, 'dashboard'])->name('backend_dashboard');
        Route::get('/dashboard/exhibitor', [Backend::class, 'exhibitor'])->name('backend_exhibitor');
        Route::get('/dashboard/exhibitor/{id}', [Backend::class, 'detail_exhibitor'])->name('backend_detail_exhibitor');
        Route::get('/dashboard/exhibitor/change/{id}', [Backend::class, 'change_exhibitor'])->name('backend_change_exhibitor');
        Route::get('/dashboard/exhibitor/delete/{id}', [Backend::class, 'delete_exhibitor'])->name('backend_delete_exhibitor');
        Route::get('/export_exhibitor', [Backend::class, 'export_exhibitor'])->name('export_exhibitor');
        Route::get('/export_exhibitor_form_a', [Backend::class, 'export_exhibitor_form_a'])->name('export_exhibitor_form_a');
    });
    Route::middleware('end_user')->group(function () {
        Route::get('/profile', [Frontend::class, 'profile'])->name('profile');
    });
});


// Post
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/input_admin', [AuthController::class, 'input_admin'])->name('input_admin');
Route::post('/input_exhibitor', [Frontend::class, 'input_exhibitor'])->name('input_exhibitor');
Route::post('/input_exhibitor_form_a', [Frontend::class, 'input_exhibitor_form_a'])->name('input_exhibitor_form_a');
