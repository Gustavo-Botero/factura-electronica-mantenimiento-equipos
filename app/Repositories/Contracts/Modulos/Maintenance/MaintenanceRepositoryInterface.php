<?php 

namespace App\Repositories\Contracts\Modulos\Maintenance;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface MaintenanceRepositoryInterface
{
    public function getAll(): Collection;

    public function create(Request $request, int $userId) : int;
}