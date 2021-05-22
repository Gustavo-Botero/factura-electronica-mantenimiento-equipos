<?php

namespace App\UseCases\Modulos\Maintenance;

use App\Repositories\Contracts\Modulos\Reference\ReferenceRepositoryInterface;
use App\Repositories\Contracts\Modulos\TypeDocument\TypeDocumentRepositoryInterface;
use App\Repositories\Contracts\Modulos\TypeMaintenance\TypeMaintenanceRepositoryInterface;
use App\Repositories\Contracts\Modulos\TypeTeam\TypeTeamRepositoryInterface;
use App\UseCases\Contracts\Modulos\Maintenance\GetDataIndexMaintenanceInterface;

class GetDataIndexMaintenanceUseCase implements GetDataIndexMaintenanceInterface
{

    protected $typeDocumentRepository;

    protected $typeTeamRepository;

    protected $referenceRepository;

    protected $typeMaintenanceRepository;

    public function __construct(
        TypeDocumentRepositoryInterface $typeDocumentRepositoryInterface,
        TypeTeamRepositoryInterface $typeTeamRepositoryInterface,
        ReferenceRepositoryInterface $referenceRepositoryInterface,
        TypeMaintenanceRepositoryInterface $typeMaintenanceRepositoryInterface
    ) {
        $this->typeDocumentRepository = $typeDocumentRepositoryInterface;
        $this->typeTeamRepository = $typeTeamRepositoryInterface;
        $this->referenceRepository = $referenceRepositoryInterface;
        $this->typeMaintenanceRepository = $typeMaintenanceRepositoryInterface;
    }

    public function handle(): array
    {
        return [
            'typeDocument' => $this->typeDocumentRepository->getAll(),
            'typeTeam' => $this->typeTeamRepository->getAll(),
            'reference' => $this->referenceRepository->getAll(),
            'typeMaintenance' => $this->typeMaintenanceRepository->getAll()
        ];
    }
}
