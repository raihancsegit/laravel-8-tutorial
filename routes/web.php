<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\fluentController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\fileUploadController;
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

//Route::get('/home/{name?}',[homeController::class,'index']);

// Route::get('/user',[userController::class,'index']);
// Route::get('/posts',[userController::class,'posts']);
// Route::get('/posts/{id}',[userController::class,'postsId']);
// Route::get('/add-post',[userController::class,'addPost']);
// Route::get('/update',[userController::class,'update']);
// Route::get('/delete/{id}',[userController::class,'delete']);

// Route::get('/fluent',[fluentController::class,'index']);
// Route::get('/getSession',[fluentController::class,'getSession']);
// Route::get('/setSession',[fluentController::class,'setSession']);
// Route::get('/removeSession',[fluentController::class,'removeSession']);
// Route::get('/login',[loginController::class,'index'])->middleware('checkUser');
// Route::post('/login/submit',[loginController::class,'loginSubmit'])->name('login.submit');

Route::get('/posts',[fluentController::class,'posts']);
Route::get('/add-post',[fluentController::class,'addPost']);
Route::post('/postSubmit',[fluentController::class,'postSubmit'])->name('post.submit');
Route::get('/postView/{id}',[fluentController::class,'postView']);
Route::post('/update/{id}',[fluentController::class,'postUpdate']);
Route::get('/deletePost/{id}',[fluentController::class,'postDelete']);

Route::get('/innerjoin',[fluentController::class,'innnerJoin']);
Route::get('/leftjoin',[fluentController::class,'leftJoin']);
Route::get('/rightjoin',[fluentController::class,'rightJoin']);
Route::get('/getallpostmodel',[fluentController::class,'getAllPostModel']);
Route::get('/allusers',[PaginationController::class,'alluser']);
Route::get('/fileupload',[fileUploadController::class,'fileupload']);
Route::post('/fileuploadSubmmit',[fileUploadController::class,'fileuploadSubmmit'])->name('upload.uploadfile');

Route::get('/test',function(){
    return view('test');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});