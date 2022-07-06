<?php

namespace App\Providers;

use App\Services\Interfaces\FileServiceInterface;
use App\Services\Interfaces\StatisticServiceInterface;
use FileService;
use Illuminate\Support\ServiceProvider;
use StatisticService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StatisticServiceInterface::class, function(){
            return new StatisticService();
        });

        $this->app->bind(FileServiceInterface::class, function(){
            return new FileService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
