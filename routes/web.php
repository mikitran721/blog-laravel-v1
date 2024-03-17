<?php

use Illuminate\Support\Facades\Route;

//bo sung them
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//endpoint = posts
//tự động tạo các route cho CRUD với PostController
Route::resource('posts', PostController::class);
