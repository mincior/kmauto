<?php

namespace App\Providers;
use App\Models\CarAsig;use App\Observers\CarAsigObserver;

use App\Models\Kmlog;
use App\Observers\KmlogObserver;
use Illuminate\Pagination\Paginator;
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
        // class placeholder
		CarAsig::observe(CarAsigObserver::class);
																																						
        Kmlog::observe(KmlogObserver::class);
        Paginator::useBootstrap();
    }
}
