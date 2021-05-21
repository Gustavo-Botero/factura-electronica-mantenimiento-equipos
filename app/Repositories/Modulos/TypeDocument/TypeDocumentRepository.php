<?php

namespace App\Repositories\Modulos\TypeDocument;

use App\Models\TypeDocumentModel;
use App\Repositories\Contracts\Modulos\TypeDocument\TypeDocumentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class TypeDocumentRepository implements TypeDocumentRepositoryInterface
{
    protected $typeDocument;

    public function __construct(TypeDocumentModel $typeDocumentModel)
    {
        $this->typeDocument = $typeDocumentModel;
    }

    public function getAll(): Collection
    {
        return $this->typeDocument->all();
    }
}