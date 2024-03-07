<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::middleware('auth')->group(function (){
    Route::get('/my-account', [UserController::class, 'index'])->name('user.index');
});

Route::middleware(['auth', 'auth.admin'])->group(function (){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::get('/', [PageController::class, 'index']);
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('sdatails', [PageController::class, 'sdatails'])->name('sdatails');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('card', [PageController::class, 'card'])->name('card');
Route::get('projects', [PageController::class, 'projects'])->name('projects');
Route::get('projectDetails', [PageController::class, 'projectDetails'])->name('projectDetails');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('shop', [ShopController::class, 'index'])->name('shop');
//Route::get('/{slug}',[ShopController::class,'show'])->name('products.product');
Route::get('/{product}', [ShopController::class, 'show'])->name('products');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::resource('products',\App\Http\Controllers\ProductController::class);
//Route::resource('/massage',\App\Http\Controllers\MassageController::class)->middleware('auth');
//Route::get('/{id}',[\App\Http\Controllers\UserController::class,'show'])->name('show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
