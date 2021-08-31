<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);

Route::middleware('jwt.verify')->group(function () {
    Route::get('posts', [PostController::class, 'all']);
    Route::get('posts/{id}', [PostController::class, 'show']);
});
