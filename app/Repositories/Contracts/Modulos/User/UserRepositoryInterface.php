<?php

namespace App\Repositories\Contracts\Modulos\User;

interface UserRepositoryInterface
{
    public function create(array $request): int;

    public function getByDocument(int $numDocument) : array;
}