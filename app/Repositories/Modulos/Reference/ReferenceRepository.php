<?php

namespace App\Repositories\Modulos\Reference;

use App\Models\ReferenceModel;
use App\Repositories\Contracts\Modulos\Reference\ReferenceRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ReferenceRepository implements ReferenceRepositoryInterface
{
    protected $reference;

    public function __construct(ReferenceModel $referenceModel)
    {
        $this->reference = $referenceModel;
    }

    public function getAll(): Collection
    {
        return $this->reference->all();
    }
}