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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/collections',  function () {
    $col = collect([
        ['income' => 100, 'tax' => 10],
        ['income' => 100, 'tax' => 10],
        ['income' => 1000, 'tax' => 200],
    ]);
    return $col->avg(function ($val) {
        return $val['income'] - $val['tax'];
    });
});
