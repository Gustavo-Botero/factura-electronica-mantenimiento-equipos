<?php 

namespace App\Repositories\Contracts\Modulos\Maintenance;

use Illuminate\Database\Eloquent\Collection;

interface MaintenanceRepositoryInterface
{
    public function getAll(): Collection;
}