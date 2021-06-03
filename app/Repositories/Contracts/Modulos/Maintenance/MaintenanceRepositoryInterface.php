<?php 

namespace App\Repositories\Contracts\Modulos\Maintenance;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface MaintenanceRepositoryInterface
{
    public function getAll(): Collection;

    public function create(array $request, int $userId) : int;

    public function getAllWithForeign();

    public function delete(int $id): bool;
}