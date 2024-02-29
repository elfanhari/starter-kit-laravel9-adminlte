<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
  return (Auth::check()) ? redirect(route('dashboard.index'))->withInfo('Anda masih dalam sesi') : redirect(route('login'));
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'cekLogin'])->name('login')->middleware('guest');

Route::middleware('auth')->group(function(){
  Route::post('/logout', LogoutController::class)->name('logout');

  Route::view('/dashboard', 'pages.dashboard.index')->name('dashboard.index');
  Route::resource('/user', UserController::class);
});
