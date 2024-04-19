<?php

namespace App\Providers;

use App\Interface\Services\ServicesInterface;
use App\Interface\Sliders\SliderInterface;
use App\Repositry\Services\ServicesRepo;
use App\Repositry\Sliders\SliderRepo;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SliderInterface::class , SliderRepo::class) ;
        $this->app->bind(ServicesInterface::class , ServicesRepo::class) ;
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
