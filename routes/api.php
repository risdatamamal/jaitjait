<?php

use App\Http\Controllers\Api\ArticlesController;
use App\Http\Controllers\Api\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () 
{
    // User
    Route::get('user', [UsersController::class, 'fetch']);
    Route::post('user', [UsersController::class, 'updateProfile']);
    Route::post('user/avatar', [UsersController::class, 'updateAvatar']);
    Route::post('logout', [UsersController::class, 'logout']);

});

// Auth
Route::post('login', [UsersController::class, 'login']);
Route::post('register', [UsersController::class, 'register']);

// Article
// Route::get('articles/', [ArticlesController::class, 'getArticles']);
