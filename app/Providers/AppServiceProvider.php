<?php

namespace App\Providers;

use App\LocalService\Domain\LocalServiceRepository;
use App\LocalService\Infrastructure\DefaultLocalServiceRepository;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(LocalServiceRepository::class, DefaultLocalServiceRepository::class);
    }
}
