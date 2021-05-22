<?php

namespace App\Repositories\Contracts\Modulos\User;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function create(Request $request): int;
}