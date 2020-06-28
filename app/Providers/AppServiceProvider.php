<?php

namespace App\Providers;

use App\Postcard;
use App\PostcardSendingServices;
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
        //     $this->app->singleton(PostcardSendingServices::class, function ($app) {
        //         return new PostcardSendingServices('usa', 4, 6);
        //     });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->app->singleton(PostcardSendingServices::class, function ($app) {
        //     return new PostcardSendingServices('usa', 4, 6);
        // });

        $this->app->singleton('Postcard', function () {
            return new PostcardSendingServices('usa', 4, 6);
        });
    }
}
