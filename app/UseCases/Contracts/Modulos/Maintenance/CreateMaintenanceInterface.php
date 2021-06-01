<?php

namespace App\UseCases\Contracts\Modulos\Maintenance;

use Illuminate\Http\Request;

interface CreateMaintenanceInterface
{
    public function handle(array $request);
}