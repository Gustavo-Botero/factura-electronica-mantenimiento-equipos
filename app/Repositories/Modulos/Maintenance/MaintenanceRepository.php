<?php

namespace App\Repositories\Modulos\Maintenance;

use App\Models\MaintenanceModel;
use App\Repositories\Contracts\Modulos\Maintenance\MaintenanceRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

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

    public function create(Request $request, int $userId) : int
    {
        $maintenance = new $this->maintenance;
        
        $maintenance->user_id = $userId;
        $maintenance->reference_id = $request->reference;
        $maintenance->type_team_id = $request->typeTeam;
        $maintenance->type_maintenance_id = $request->typeMaintenance;
        $maintenance->description = $request->description;

        $maintenance->save();

        return $maintenance->id;
    }
}