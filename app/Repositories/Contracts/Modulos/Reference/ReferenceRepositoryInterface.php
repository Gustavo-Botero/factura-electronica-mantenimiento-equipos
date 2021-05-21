<?php

namespace App\Repositories\Contracts\Modulos\Reference;

use Illuminate\Database\Eloquent\Collection;

interface ReferenceRepositoryInterface
{
    public function getAll(): Collection;
}