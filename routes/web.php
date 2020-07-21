<?php

use Illuminate\Support\Facades\Event;

Route::get('/', 'HomeController@index');

///////////////////////////////////////
// Event::listen('user.login', function () {
//     var_dump('fire off an email');
// });

// Event::listen('user.login', function () {
//     var_dump('do some reporting');
// });

// Route::get('/', function () {
//     Event::dispatch('user.login');
// });

////////////////////////////////////////
// interface Subject
// {
//     public function attach($observable);

//     public function dettach($index);

//     public function notify();
// }

// interface Observer
// {
//     public function handle();
// }

// class Login implements Subject
// {
//     protected $observers = [];

//     public function attach($observable)
//     {
//         if (is_array($observable)) {
//             foreach ($observable as $observer) {
//                 if (!$observer instanceof Observer) {
//                     throw new Exception;
//                 }
//                 $this->observers[] = $observer;
//             }

//             return;
//         }

//         $this->observers[] = $observable;

//         return $this;
//     }

//     public function dettach($index)
//     {
//         unset($this->observers[$index]);
//     }

//     public function notify()
//     {
//         foreach ($this->observers as $observer) {
//             $observer->handle();
//         }
//     }
// }

// class LogHandler implements Observer
// {
//     public function handle()
//     {
//         var_dump('handling login...');
//     }
// }

// class EmailHandler implements Observer
// {
//     public function handle()
//     {
//         var_dump('handling emails...');
//     }
// }

// $newLogin = new Login;

// $newLogin->attach([new LogHandler, new EmailHandler]);

// $newLogin->notify();
