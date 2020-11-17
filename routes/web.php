<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;

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
Route::resource('posts', PostController::class);
Route::get('blog/{slug}', [BlogController::class, 'getSingle'])->where('slug','[\w\d\-\_]+')->name('blog.single');
Route::get('blog', [BlogController::class, 'getIndex'])->name('blog.index');
Route::get('contact', [PagesController::class, 'getContact']);
Route::get('about',[PagesController::class, 'getAbout']);
Route::get('/',[PagesController::class, 'getIndex'])->name('index');

//register routes
Route::get('register',[RegistrationController::class,'create'])->name('register.create');
Route::post('register',[RegistrationController::class,'store'])->name('register.store');

//authentication routes
Route::get('logout',[LoginController::class,'getLogout'])->name('logout');
Route::get('login',[LoginController::class,'getLogin'])->name('login');
Route::post('login',[LoginController::class,'authenticate'])->name('authenticate');

//password reset routes
Route::get('forgot-password',[PasswordResetController::class,'forgotPasswordRequest'])->name('password.request');
Route::post('forgot-password',[PasswordResetController::class,'forgotPasswordEmail'])->name('password.email');
Route::get('reset-password/{token}',[PasswordResetController::class,'resetPasswordRequest'])->name('password.reset');
Route::post('rest-password/',[PasswordResetController::class,'resetPasswordConfirm'])->name('password.update');
