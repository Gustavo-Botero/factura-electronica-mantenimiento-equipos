<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypeUserModel extends Model
{
    use HasFactory;

    protected $table = 'users_type_users';

    protected $keyType = 'integer';

    protected $fillable = [
        'user_id',
        'type_user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function typeUser(){
        return $this->belongsTo(TypeUserModel::class);
    }
}
