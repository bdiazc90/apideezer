<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    // Artists:
    Route::get('artists', [ArtistController::class, 'index']);
    Route::get('artist/{id}', [ArtistController::class, 'show']);
    // Albums:
    Route::get('albums', [AlbumController::class, 'index']);
    Route::get('album/{id}', [AlbumController::class, 'show']);
    // Songs:
    Route::get('songs', [SongController::class, 'index']);
    Route::get('song/{id}', [SongController::class, 'show']);
    // Search:`
    Route::get('search', [SongController::class, 'search']);
});
