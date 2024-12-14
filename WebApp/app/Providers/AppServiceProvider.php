<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Illuminate\Pagination\Paginator;

>>>>>>> ec25080 (backup for wls)
use Illuminate\Support\ServiceProvider;

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
<<<<<<< HEAD
        //
=======
        Paginator::useBootstrap();
>>>>>>> ec25080 (backup for wls)
    }
}
