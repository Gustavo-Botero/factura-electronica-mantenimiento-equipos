<?php

namespace App\Repositories\Contracts\Modulos\TypeMaintenance;

use Illuminate\Database\Eloquent\Collection;

interface TypeMaintenanceRepositoryInterface
{
    public function getAll(): Collection;
}