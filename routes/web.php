<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\McuRegistrationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;


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

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('register', [AuthController::class, 'register']);

Route::get('password/reset', function () {
    return view('auth.passwords.email');
})->name('password.request');

Route::post('password/email', [AuthController::class, 'resetPassword'])->name('password.email');

Route::get('password/reset/{token}', function ($token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->name('password.reset');

Route::post('password/reset', [AuthController::class, 'updatePassword'])->name('password.update');

Route::get('/', function () { return view('index');})->name('main');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/services', function () {return view('services');})->name('services');
Route::get('/department', [DepartController::class, 'index'])->name('department');
Route::get('/department-single', function () {return view('department-single');})->name('department-single');
Route::get('/doctor', function () {return view('doctor');})->name('doctor');
Route::get('/doctor-single', function () {return view('doctor-single');})->name('doctor-single');
Route::get('/appoinment', function () {return view('appoinment');})->name('appoinment');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::post('/mail', function () {return view('mail');})->name('mail');

// Routes for MCU registration
Route::post('/submit-registration', [RegistrationController::class, 'submitRegistration'])->name('submit-registration');
Route::get('/verify-registration', [RegistrationController::class, 'verifyRegistration'])->name('verify-registration');
Route::post('/create-pdf', [RegistrationController::class, 'createPDF'])->name('create-pdf');
Route::get('/back-to-main', [RegistrationController::class, 'backToMain'])->name('back-to-main');


// Routes for other registration actions
Route::get('/verifikasi', 'RegistrationController@showVerificationForm')->name('verification.form');
Route::post('/verifikasi', 'RegistrationController@submitVerification')->name('verification.submit');
Route::get('/verify-registration', [RegistrationController::class, 'verifyRegistration'])->name('verify-registration');
Route::post('/confirm-registration', [RegistrationController::class, 'confirmRegistration'])->name('confirm-registration');
Route::post('/create-pdf', [RegistrationController::class, 'createPDF'])->name('create-pdf');
Route::get('/back-to-main', [RegistrationController::class, 'backToMain'])->name('back-to-main');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/update-status/{id}', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');

// Route to show payment page
Route::post('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment');

// Route to process payment
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('process.payment');
// Route to handle successful payment
Route::get('/payment-success', function () {
    return view('payment-success');
})->name('payment.success');

// Admin routes with auth middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
