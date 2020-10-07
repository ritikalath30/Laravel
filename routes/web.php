<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/send_otp',function(){
    return view('auth.otp_page');
});


// Route::get('/send_otp', ['OtpController::class','verify_otp']);




Route::get('/verify_user',function(){
    return view('auth.verified_user');
});

Route::get('/send_otp',[OtpPageController::class,'show']);
Route::post('/send_otp',[OtpPageController::class,'store']);
