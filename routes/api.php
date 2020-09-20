<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{name?}', function($name = null){
    return "hi " .$name;
});

Route::get('/product/{id?}', function($id = null){
    return "Id " .$id;
});

Route::match(['get','post'],'/student', function(Request $req){
    return 'Method ' .$req->method();
});

Route::any('/any',function(Request $req){
    return 'Method ' .$req->method();
});
