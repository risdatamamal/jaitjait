<?php

use Illuminate\Support\Facades\{Route, Auth};
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\OurPartnerController;

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
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/our-partner', [OurPartnerController::class, 'index'])->name('our-partner');
