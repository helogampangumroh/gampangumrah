<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // set database default string length to support older versions of MySQL
        Schema::defaultStringLength(191);
        // Use Bootstrap 5 for pagination
        Paginator::useBootstrapFive();


    }
}
