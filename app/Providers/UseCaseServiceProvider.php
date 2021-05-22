<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UseCaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\UseCases\Contracts\Modulos\Maintenance\GetDataIndexMaintenanceInterface',
            'App\UseCases\Modulos\Maintenance\GetDataIndexMaintenanceUseCase'
        );

        $this->app->bind(
            'App\UseCases\Contracts\Modulos\Maintenance\CreateMaintenanceInterface',
            'App\UseCases\Modulos\Maintenance\CreateMaintenanceUseCase'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
