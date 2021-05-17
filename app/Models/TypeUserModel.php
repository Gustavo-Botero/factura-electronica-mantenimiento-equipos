<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUserModel extends Model
{
    use HasFactory;

    protected $table = 'type_users';

    protected $keyType = 'integer';

    protected $fillable = [
        'name',
    ];

    public function usersTypeUsers(){
        return $this->hasMany(UserTypeUserModel::class);
    }
}
