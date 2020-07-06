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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin/home', function () {
    return view('admin.home');
});
// Route::get('admin/post', function () {
//     return view('admin.post.post');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('admin/post', 'PostController@index');
Route::get('admin/post/create', 'PostController@addPost')->name('admin.post');
Route::post('post', 'PostController@savePost');
Route::get('delete-post/{id}', 'PostController@deletePost');



Route::get('admin/vedios', 'VedioController@index');
Route::get('admin/vedio/create', 'VedioController@addvedio')->name('admin.vedio');
Route::post('vedio', 'VedioController@saveVedio');
Route::get('delete-vedio/{id}', 'VedioController@deleteVedio');
