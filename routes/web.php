<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\OurPartnerController;

use App\Http\Controllers\Admin\DashboardAdminController;

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
        // dashboard
        Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin');
    });


// TAILOR
Route::prefix('tailor')
    ->middleware(['auth:sanctum', 'tailor'])
    ->group(function() {
        
    });