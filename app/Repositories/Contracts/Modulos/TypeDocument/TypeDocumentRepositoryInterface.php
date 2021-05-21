<?php

namespace App\Repositories\Contracts\Modulos\TypeDocument;

use Illuminate\Database\Eloquent\Collection;

interface TypeDocumentRepositoryInterface
{
    public function getAll(): Collection;
}