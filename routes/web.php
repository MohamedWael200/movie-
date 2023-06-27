<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MoveController;
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

//Route::get('/', function () {
//    return view('movies');
//});

Route::get('add',[MoveController::class,'showadd'])->name('showadd');
Route::post('store',[MoveController::class,'store'])->name('store');
Route::get('home',[MoveController::class,'home'])->name('home');
Route::get('movies',[MoveController::class,'showmovies'])->name('movies');
Route::get('about',[MoveController::class,'about'])->name('about');
Route::get('moveDetails/{id}',[MoveController::class,'moveDetails'])->name('moveDetails');


Route::get('edite/{id}',[MoveController::class,'edite'])->name('edite');
Route::post('update/{id}',[MoveController::class,'update'])->name('update');
Route::post('destroy/{id}',[MoveController::class,'destroy'])->name('destroy');
Route::get('deleteAll',[MoveController::class,'deleteAll'])->name('deleteAll');



////////////
Route::get('/',[CustomAuthController::class,'home']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login',[CustomAuthController::class,'index'])->name('login');
Route::post('postlogin',[CustomAuthController::class,'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
