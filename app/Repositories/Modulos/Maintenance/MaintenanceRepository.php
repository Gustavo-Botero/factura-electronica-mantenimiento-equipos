<?php

namespace App\Repositories\Modulos\Maintenance;

use App\Models\MaintenanceModel;
use App\Repositories\Contracts\Modulos\Maintenance\MaintenanceRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaintenanceRepository implements MaintenanceRepositoryInterface
{
    protected $maintenance;

    public function __construct(MaintenanceModel $maintenanceModel)
    {
        $this->maintenance = $maintenanceModel;
    }

    public function getAll(): Collection
    {
        return $this->maintenance->all();
    }

    public function create(array $request, int $userId): int
    {
        $maintenance = new $this->maintenance;

        $maintenance->user_id = $userId;
        $maintenance->reference_id = $request['reference'];
        $maintenance->type_team_id = $request['typeTeam'];
        $maintenance->type_maintenance_id = $request['typeMaintenance'];
        $maintenance->description = $request['description'];

        $maintenance->save();

        return $maintenance->id;
    }

    public function getAllWithForeign()
    {
        return DB::table('maintenances as maint')
            ->join('users as user', 'maint.user_id', '=', 'user.id')
            ->join('references as ref', 'maint.reference_id', '=', 'ref.id')
            ->join('type_teams as team', 'maint.type_team_id', '=', 'team.id')
            ->join('type_maintenances as typeMaint', 'maint.type_maintenance_id', '=', 'typeMaint.id')
            ->select(
                'maint.id as maintId',
                'maint.description as descripcion',
                'user.id as usuarioId',
                'user.first_name as nombres',
                'user.last_name as apellidos',
                'user.num_phone as numeroTelefono',
                'user.address as direccion',
                'ref.name as referencia',
                'team.name as tipoEquipo',
                'typeMaint.name as tipoMantenimiento'



            )->get();
    }

    public function delete(int $id): bool
    {
        $maintenance = $this->maintenance->find($id);

        return $maintenance->delete();
    }
}
