<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\Modulos\Maintenance\MaintenanceRepositoryInterface',
            'App\Repositories\Modulos\Maintenance\MaintenanceRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Modulos\Reference\ReferenceRepositoryInterface',
            'App\Repositories\Modulos\Reference\ReferenceRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Modulos\TypeTeam\TypeTeamRepositoryInterface',
            'App\Repositories\Modulos\TypeTeam\TypeTeamRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Modulos\TypeDocument\TypeDocumentRepositoryInterface',
            'App\Repositories\Modulos\TypeDocument\TypeDocumentRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Modulos\TypeMaintenance\TypeMaintenanceRepositoryInterface',
            'App\Repositories\Modulos\TypeMaintenance\TypeMaintenanceRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\Modulos\User\UserRepositoryInterface',
            'App\Repositories\Modulos\User\UserRepository'
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
