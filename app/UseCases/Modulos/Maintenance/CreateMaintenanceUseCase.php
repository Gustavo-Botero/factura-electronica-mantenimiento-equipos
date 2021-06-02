<?php

namespace App\UseCases\Modulos\Maintenance;

use App\Repositories\Contracts\Modulos\Maintenance\MaintenanceRepositoryInterface;
use App\Repositories\Contracts\Modulos\User\UserRepositoryInterface;
use App\UseCases\Contracts\Modulos\Maintenance\CreateMaintenanceInterface;
use Illuminate\Http\Request;

class CreateMaintenanceUseCase implements CreateMaintenanceInterface
{
    protected $userRepository;

    protected $maintenanceRepository;

    public function __construct(
        UserRepositoryInterface $userRepositoryInterface,
        MaintenanceRepositoryInterface $maintenanceRepositoryInterface
    ) {
        $this->userRepository = $userRepositoryInterface;
        $this->maintenanceRepository = $maintenanceRepositoryInterface;
    }


    public function handle(array $request)
    {
        $userId = $this->userRepository->create($request);
        $maintenance = $this->maintenanceRepository->create($request, $userId);

        return [
            'alert' => true,
            'icon' => 'success',
            'title' => 'Registro guardado exitosamente',
            'load' => true,
            'limpForm' => ['limpiar' => true, 'idForm' => 'maintenance']
        ];
    }
}
