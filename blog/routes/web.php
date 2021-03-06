<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/add-post',[PostController::class,'create']);

Route::post('/create-post',[PostController::class,'store'])->name('createPost');

Route::get('/posts',[PostController::class,'show']);

Route::get('/delete-post/{id}',[PostController::class,'destroy']);

Route::get('/posts/{id}',[PostController::class,'getPostById']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
