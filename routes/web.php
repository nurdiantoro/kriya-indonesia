<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\VisitorController;
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
Route::get('/contact', [Frontend::class, 'contact'])->name('contact');
Route::get('/about', [Frontend::class, 'about'])->name('about');
Route::get('/exhibitor_form-a', [Frontend::class, 'exhibitor_form_a'])->name('exhibitor_form_a');

// Auth-------------------------------------------------------------------
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login_view'])->name('login_view');
    Route::get('/register', [AuthController::class, 'register_view'])->name('register_view');
    Route::get('/register_admin', [AuthController::class, 'register_admin'])->name('register_admin');
    Route::get('/forgot_password', [AuthController::class, 'forgot_password_view'])->name('forgot_password_view');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/forgot_password', [AuthController::class, 'forgot_password'])->name('forgot_password');
Route::get('/reset-password/{token}', [AuthController::class, 'reset_password'])->middleware('guest')->name('password.reset');
Route::post('/update_password', [AuthController::class, 'update_password'])->middleware('guest')->name('password.update');

// BACKEND----------------------------------------------------------------
Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [Backend::class, 'scan_barcode'])->name('backend_dashboard');

        // Profile
        Route::get('/dashboard/profile', [Backend::class, 'profile'])->name('backend_profile');
        Route::get('/dashboard/profile/change', [Backend::class, 'profile_change'])->name('backend_profile_change');
        Route::get('/dashboard/profile/change_password', [Backend::class, 'profile_change_password'])->name('backend_profile_change_password');

        // View Exhibitor
        Route::get('/dashboard/exhibitor', [Backend::class, 'exhibitor'])->name('backend_exhibitor');
        Route::get('/dashboard/exhibitor/duplicate_to_form_a/{id}', [Backend::class, 'exhibitor_duplicate_to_form_a'])->name('backend_exhibitor_duplicate_to_form_a');
        Route::get('/dashboard/exhibitor/{id}', [Backend::class, 'detail_exhibitor'])->name('backend_detail_exhibitor');
        Route::get('/dashboard/exhibitor/change/{id}', [Backend::class, 'change_exhibitor'])->name('backend_change_exhibitor');
        Route::get('/dashboard/exhibitor/delete/{id}', [Backend::class, 'delete_exhibitor'])->name('backend_delete_exhibitor');

        // View Exhibitor Form A
        Route::get('/dashboard/exhibitor_form_a', [Backend::class, 'exhibitor_form_a'])->name('backend_exhibitor_form_a');
        Route::get('/dashboard/exhibitor_form_a/{id}', [Backend::class, 'detail_exhibitor_form_a'])->name('backend_detail_exhibitor_form_a');
        Route::get('/dashboard/exhibitor_form_a/change/{id}', [Backend::class, 'change_exhibitor_form_a'])->name('backend_change_exhibitor_form_a');
        Route::get('/dashboard/exhibitor_form_a/delete/{id}', [Backend::class, 'delete_exhibitor_form_a'])->name('backend_delete_exhibitor_form_a');

        // View
        Route::get('/dashboard/contact', [Backend::class, 'contact'])->name('backend_contact');
        Route::get('/dashboard/settings', [Backend::class, 'settings'])->name('backend_settings');
        Route::get('/dashboard/scan_barcode/submit', [VisitorController::class, 'index'])->name('backend_scan_barcode_submit');
        Route::get('/dashboard/data_registration', [Backend::class, 'data_registration'])->name('backend_data_registration');
        Route::get('/dashboard/data_admin', [Backend::class, 'data_admin'])->name('backend_data_admin');

        // Export Excel & PDF
        Route::get('/export_exhibitor', [Backend::class, 'export_exhibitor'])->name('export_exhibitor');
        Route::get('/export_exhibitor_form_a', [Backend::class, 'export_exhibitor_form_a'])->name('export_exhibitor_form_a');
        Route::get('/export_exhibitor_form_a_pdf/{id}', [PdfController::class, 'index'])->name('export_exhibitor_form_a_pdf');
        Route::get('/export_visitor', [Backend::class, 'export_visitor'])->name('export_visitor');
        Route::get('/export_user', [Backend::class, 'export_user'])->name('export_user');

        // Reset Password
        Route::get('/reset_password_by_admin/{qr_code}', [Backend::class, 'reset_password_by_admin'])->name('backend_reset_password_by_admin');
        Route::get('/reset_password', [Backend::class, 'reset_password'])->name('backend_reset_password');
        Route::post('/reset_password', [Backend::class, 'reset_password_submit'])->name('backend_reset_password_submit');

        // Store
        Route::post('/dashboard/contact/store', [ContactController::class, 'store'])->name('dashboard_contact_store');
        Route::post('/dashboard/highlight/store', [HighlightController::class, 'store'])->name('backend_highlight_store');

        // Update
        Route::post('/dashboard/profile/update', [Backend::class, 'profile_update'])->name('dashboard_profile_update');
        Route::post('/dashboard/profile/update_password', [Backend::class, 'profile_update_password'])->name('dashboard_profile_update_password');
        Route::post('/dashboard/exhibitor/update', [Backend::class, 'update_exhibitor'])->name('dashboard_exhibitor_update');
        Route::post('/dashboard/exhibitor_form_a/update', [Backend::class, 'update_exhibitor_form_a'])->name('dashboard_exhibitor_form_a_update');
        Route::post('/dashboard/contact/update/', [ContactController::class, 'update'])->name('dashboard_contact_update');
        Route::post('/dashboard/highlight/update', [HighlightController::class, 'update'])->name('backend_highlight_update');

        // Delete
        Route::post('/dashboard/highlight/destroy/', [HighlightController::class, 'destroy'])->name('backend_highlight_destroy');
        Route::post('/dashboard/contact/destroy/', [ContactController::class, 'destroy'])->name('dashboard_contact_destroy');
    });

    // END USER
    Route::middleware('end_user')->group(function () {
        Route::get('/profile', [Frontend::class, 'profile'])->name('profile');
        Route::get('/profile/change', [Frontend::class, 'profile_change'])->name('profile_change');
        Route::get('/profile/password', [Frontend::class, 'password_change'])->name('password_change');
        Route::post('/profile/change', [Frontend::class, 'profile_change_edit'])->name('profile_change_edit');
        Route::post('/profile/password', [Frontend::class, 'password_change_update'])->name('password_change_update');
    });
});

// Route::get('/test_email', [EmailController::class, 'send_email'])->name('send_email');
// Route::get('/test_pdf', [PdfController::class, 'index'])->name('download_pdf');
// Route::get('/test_pdf/view', [PdfController::class, 'view'])->name('download_pdf');

// Post
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/input_admin', [AuthController::class, 'input_admin'])->name('input_admin');
Route::post('/input_exhibitor', [Frontend::class, 'input_exhibitor'])->name('input_exhibitor');
Route::post('/input_exhibitor_form_a', [Frontend::class, 'input_exhibitor_form_a'])->name('input_exhibitor_form_a');
