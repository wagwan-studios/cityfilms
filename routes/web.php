<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\FrontendPagesController;
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

Route::get('/', [FrontendPagesController::class, 'frontPage']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/work', [FrontendPagesController::class, 'workPage'])->name('getWork');
Route::get('/work/{slug}', [FrontendPagesController::class, 'workDetail'])->where('slug', '.*');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::controller(AuthController::class)->middleware('guest')->group(function(){
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('authenticate');
    });
    Route::controller(AuthController::class)->middleware('auth')->group(function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/logout', 'logout')->name('logout');
    });
    Route::resource('categories', CategoriesController::class);
    Route::resource('portfolio', PortfolioController::class);
});
