<?php

namespace App\Repositories\Modulos\TypeTeam;

use App\Models\TypeTeamModel;
use App\Repositories\Contracts\Modulos\TypeTeam\TypeTeamRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class TypeTeamRepository implements TypeTeamRepositoryInterface
{
    protected $typeTeam;

    public function __construct(TypeTeamModel $typeTeamModel)
    {
        $this->typeTeam = $typeTeamModel;   
    }

    public function getAll(): Collection
    {
        return $this->typeTeam->all();
    }
}