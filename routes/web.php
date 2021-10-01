<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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
    //return view('welcome');
    return 'hello';
});

Route::get('viblo/', [UserController::class, 'getUser']);

Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store'])->name('create-post');
