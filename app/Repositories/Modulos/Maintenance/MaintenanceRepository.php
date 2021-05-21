<?php

namespace App\Repositories\Modulos\Maintenance;

use App\Models\MaintenanceModel;
use App\Repositories\Contracts\Modulos\Maintenance\MaintenanceRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class MaintenanceRepository implements MaintenanceRepositoryInterface
{
    protected $maintenance;

    public function __construct(MaintenanceModel $maintenanceModel){
        $this->maintenance = $maintenanceModel;
    }

    public function getAll(): Collection
    {
        return $this->maintenance->all();
    }
}