<?php

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

Route::get('/',"HomeController@index");
Route::get('/article',"HomeController@article");
Route::get('/article/{slug}/detail',"HomeController@detailArticle");

Route::get('/gallery',"HomeController@gallery");

Route::get("/volunteer","HomeController@volunteer");

Route::get('/tentang', function () {
    return view('about');
});

Route::get("/auth/login","AuthController@index")->name("login");
Route::post("/auth/postlogin","AuthController@postlogin")->name("postlogin");
Route::get("/auth/logout","AuthController@logout")->name("logout");

// Dashboard

Route::get("/dashboard","AdminController@index");


// Dashboard Gallery
Route::get("/dashboard/gallery","GalleryController@index");
Route::get("/dashboard/gallery/new","GalleryController@create")->name("gallery.new");
Route::post("/dashboard/gallery/post","GalleryController@store")->name("gallery.store");
Route::get("/dashboard/gallery/{id}/del","GalleryController@destroy");
Route::get("/dashboard/gallery/{id}/edit","GalleryController@edit");
Route::post("/dashboard/gallery/update","GalleryController@update")->name("gallery.update");


// Dashboard Article
Route::get("/dashboard/article","ArticleController@index");
Route::get("/dashboard/article/new","ArticleController@create")->name("article.new");
Route::post("/dashboard/article/post","ArticleController@store")->name("article.store");
Route::get("/dashboard/article/{id}/del","ArticleController@destroy")->name("article.destroy");
Route::get("/dashboard/article/{id}/edit","ArticleController@edit");
Route::post("/dashboard/article/update","ArticleController@update")->name("article.update");

Route::get("/dashboard/users","UserController@index");
Route::get("/dashboard/users/new","UserController@create")->name("users.new");
Route::get("/dashboard/users/{id}/del","UserController@destroy")->name("users.destroy");
Route::get("/dashboard/users/{id}/role/admin","UserController@admin");
Route::get("/dashboard/users/{id}/role/user","UserController@user");

Route::get("/dashboard/profile","ProfileController@index")->name("dashboard.profile");