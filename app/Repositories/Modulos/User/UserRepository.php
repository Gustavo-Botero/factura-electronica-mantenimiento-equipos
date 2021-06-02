<?php

namespace App\Repositories\Modulos\User;

use App\Models\User;
use App\Repositories\Contracts\Modulos\User\UserRepositoryInterface;
class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }



    public function create(array $request): int
    {   
        if(isset($request['password'])) {
            $password = $request['password'];
        }else {
            $password = null;
        }

        $user = new $this->user;
        $user->first_name = $request['firstName'];
        $user->last_name = $request['lastName'];
        $user->email = $request['email'];
        $user->type_document_id = $request['typeDocument'];
        $user->num_document = $request['numDocument'];
        $user->password = $password;
        $user->num_phone = $request['numPhone'];
        $user->address = $request['address'];

        $user->save();

        return $user->id;
    }

    public function getByDocument(int $numDocument) : array
    {
        return $this->user->where('num_document', $numDocument)->select('id')->get()->toArray();
    }
}