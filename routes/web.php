<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\OurPartnerController;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\DashboardArticleController;
use App\Http\Controllers\Admin\DashboardUserController;

use App\Http\Controllers\Tailor\DashboardTailorController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
Route::get('/our-partner', [OurPartnerController::class, 'index'])->name('our-partner');


// ADMIN
Route::prefix('admin')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function() {
        Route::resource('dashboard', DashboardAdminController::class);
        Route::resource('articles', DashboardArticleController::class);
        Route::resource('users', DashboardUserController::class);
    });


// TAILOR
Route::prefix('tailor')
    ->middleware(['auth:sanctum', 'tailor'])
    ->group(function() {
        Route::resource('dashboard', DashboardTailorController::class);
    });