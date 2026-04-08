<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;

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
        if (env('FORCE_HTTPS', false))
        {   
            URL::forceScheme('https');   
        }        
        
        Blade::anonymousComponentPath(base_path('vendor/denis909/laravel-theme-bootstrap5/components'), 'admin');
        Blade::anonymousComponentPath(base_path('resources/views/admin/components'), 'admin');

        View::share('adminSidebarCollapsed', request()->cookie('admin-sidebar-collapsed', 0));

        Paginator::useBootstrap();
    }
}
