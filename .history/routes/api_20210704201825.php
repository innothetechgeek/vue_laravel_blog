<?php

use Illuminate\Http\Request;
use App\Models\Post;
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

Route::get('/posts', function(){

    return Post::all();

});

Route::post('/add', function(){
    return Post::create([
        title => '8 ways to have fun',
        'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
    ])
})


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
