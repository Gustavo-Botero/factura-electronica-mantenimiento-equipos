<?php

namespace App\Repositories\Modulos\User;

use App\Models\User;
use App\Repositories\Contracts\Modulos\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }



    public function create(Request $request): int
    {
        $user = new $this->user;
        $user->first_name = $request->fistName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->type_document_id = $request->typeDocument;
        $user->num_document = $request->numDocument;
        $user->password = $request->password ? $request->password : null;
        $user->num_phone = $request->numPhone;
        $user->address = $request->address;

        $user->save();

        return $user->id;
    }
}