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

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    dd(Str::prefix('32446456', 'abc-'));

    return Response::errorJson('tsting error');
});

Route::get('/amy',  function () {
    return view('amy.index');
});
