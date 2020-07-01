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

use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use SebastianBergmann\Environment\Console;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lazy',  function () {
    // $collection = Collection::times(100)->map(function ($num) {
    //     return pow(2, $num);
    // })->all();

    $collection = LazyCollection::times(100)->map(function ($num) {
        return pow(2, $num);
    })->all();

    dump($collection);
});

// use 'yield' rather than 'return'
Route::get('/generator', function () {
    function happyFunction($strings)
    {
        foreach ($strings as $s) {
            yield $s;
        }
    }

    // return happyFunction()->current();
    foreach (happyFunction([1, 2, 3, 4, 5, 6]) as $result) {
        dump($result);
    }
});
