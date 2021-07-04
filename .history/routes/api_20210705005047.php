<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

// Route::get('/posts', [PostController::class,'index']);

// Route::post('post/add', [PostController::class, 'store']);

Route::resource('posts', PostController::class);

Route::post('register',[UserController::class,'register']);


Route::group(['middleware'=>['auth:sanctum']], function(){
     
    Route::post('posts',[PostController::class,'store']);
    Route::put('posts/{id}',[PostController::class,'update']);
    Route::delete('posts/{id}',[PostController::class,'destroy']);
    Route::log('/logout', Post)

});