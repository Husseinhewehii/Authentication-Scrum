<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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



Route::group(['middleware' => "unAuth:web"], function (){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register'); 
    Route::post('/loginAttempt', [AuthController::class, 'loginAttempt'])->name('loginAttempt');
    Route::post('/registerAttempt', [AuthController::class, 'registerAttempt'])->name('registerAttempt'); 

    Route::get('oauth/{driver}', [SocialController::class, 'redirectToProvider'])->name('social.oauth');
    Route::get('oauth/{driver}/callback', [SocialController::class, 'handleProviderCallback'])->name('social.callback');
});


Route::group(['middleware' => "auth:web"], function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
