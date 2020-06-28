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

use App\Postcard;
use App\PostcardSendingServices;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/amy',  function () {
    return view('amy.index');
});

Route::get('/postcard', function (PostcardSendingServices $postcardService) {
    // $postcardService = new PostcardSendingServices('usa', 4, 6);

    $postcardService->hello('Hello from Whitehorse', 'tim@laravel.com');
});

Route::get('/facade', function () {
    Postcard::hello('123', 'jess@gmail.com');
});
