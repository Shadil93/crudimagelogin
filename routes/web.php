<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/do_register',[HomeController::class,'do_register'])->name('do_register');

Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/do_login',[HomeController::class,'do_login'])->name('do_login');

Route::get('/dashbord',[HomeController::class,'dashbord'])->name('dashbord')->middleware('check');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::get('/edit{id}',[HomeController::class,'edit'])->name('edit');