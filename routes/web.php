<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthrController;

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
Route::prefix('author')->name('admin.')->group(function(){
    Route::middleware(['guest:web'])->group(function () {
        Route::view('/login', 'back.pages.auth.login')->name('login');
        Route::view('/forgot-password', 'back.pages.auth.forgot')->name('forgot-password');
    });
    Route::middleware([])->group(function () {
        Route::get('/home',[AuthrController::class,'index'])->name('home');
    });
});