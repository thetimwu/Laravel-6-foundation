<?php

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

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::patch('/posts/{post}', 'PostController@update')->name('post.update');
Route::post('/posts', 'PostController@store')->name('post.store');
Route::get('/posts', 'PostController@index')->name('post.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
