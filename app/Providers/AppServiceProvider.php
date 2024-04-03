<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Questocat\Referral\ReferralServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->register(ReferralServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
