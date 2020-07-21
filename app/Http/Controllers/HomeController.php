<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // method injection
    public function index(Dispatcher $dispatcher)
    {
        $dispatcher->dispatch('UserHasLoggedIn');
    }
}
