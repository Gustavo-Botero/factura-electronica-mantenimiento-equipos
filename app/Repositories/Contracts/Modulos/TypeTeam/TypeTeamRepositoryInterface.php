<?php

namespace App\Repositories\Contracts\Modulos\TypeTeam;

use Illuminate\Database\Eloquent\Collection;

interface TypeTeamRepositoryInterface
{
    public function getAll(): Collection;
}