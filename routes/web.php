<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');


Route::middleware("auth")
->namespace("Admin")
->name("admin.")
->prefix("admin")
->group(function() {
    Route::get('/', "HomeController@index")->name("home");
    Route::get("/users", "UserController@index")->name("users.index");
    Route::get("/users/{user}", "UserController@update")->name("users.update");
    Route::get("/users/{user}/edit", "UserController@edit")->name("users.edit");
    Route::get("/categories/{category}/posts", "CategoryController@posts")->name("categories.posts");
    Route::resource("posts", "PostController");
});

Route::get("{any?}", function () {
    return view("welcome");
})->where("any", ".*");


