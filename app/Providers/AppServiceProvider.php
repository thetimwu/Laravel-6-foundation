<?php

namespace App\Providers;

use App\Channel;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;

use App\Billing\PaymentGatewayContract;
use App\Http\View\Composers\ChannelsComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class, function ($app) {
            if (request()->has('credit')) {
                return new CreditPaymentGateway('USD');
            }
            return new BankPaymentGateway('USD');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // option 1, not a good choice cos it will run query for all views
        // View::share('channels', Channel::orderBy('name')->get());

        //option 2, attach to some views
        // View::composer(['channel.index', 'post.*'], function ($view) {
        //     $view->with('channels', Channel::orderBy('name', 'desc')->get());
        // });

        //option 3 dedicated class
        // View::composer(['channel.index', 'post.*'], ChannelsComposer::class);
        // add partial
        View::composer('partials.channels.*', ChannelsComposer::class);
    }
}
