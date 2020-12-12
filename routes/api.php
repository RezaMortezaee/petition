<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\CommentController;

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

/* Tag */
Route::resource('/tags', TagController::class);
/* Sign */
Route::resource('/signs', SignController::class);
/* User */
Route::resource('/users', UserController::class);
/* Photo */
Route::resource('/topics', TopicController::class);
/* Topic */
Route::resource('/photos', PhotoController::class);
/* Comment */
Route::resource('/comments', CommentController::class);
/* Petition */
Route::resource('/petitions', PetitionController::class);

