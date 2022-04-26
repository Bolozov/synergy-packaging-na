<?php

namespace App\Providers;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Bootstrap Paginator
        Paginator::useBootstrap();

        //Localizing Carbon
        Carbon::setLocale(LC_TIME, $this->app->getLocale());

        // View Composer : Website Settings
        if (!app()->runningInConsole()) {
            $settings = Setting::first();
            view()->composer('website.layouts.app', function ($view) use ($settings) {
                $view->with('settings', $settings);
            });
        }
        if (!app()->runningInConsole() && !app()->environment('local')) {
            URL::forceScheme('https');
        }

    }
}
