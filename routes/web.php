<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadImageController;

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

Route::get('/', function () {
    return view('welcome');
});

/* Petitions */
Route::get('petitions', [PetitionController::class, 'index']);
Route::post('petitions', [PetitionController::class, 'index']);


/* Image Path */
Route::get('upload-image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);

/* Dashboard */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


