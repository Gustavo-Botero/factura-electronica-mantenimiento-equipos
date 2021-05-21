<?php

namespace App\Repositories\Modulos\TypeMaintenance;

use App\Models\TypeMaintenanceModel;
use App\Repositories\Contracts\Modulos\TypeMaintenance\TypeMaintenanceRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class TypeMaintenanceRepository implements TypeMaintenanceRepositoryInterface
{
    protected $typeMaintenance;

    public function __construct(TypeMaintenanceModel $typeMaintenanceModel)
    {
        $this->typeMaintenance = $typeMaintenanceModel;
    }

    public function getAll(): Collection
    {
        return $this->typeMaintenance->all();
    }
}