<?php

namespace App\Providers;

use App\Services\GithubService;
use App\Services\GithubUserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(GithubService::class, function () {
            return new GithubService();
        });
        $this->app->bind(GithubUserService::class, function () {
            return new GithubUserService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
