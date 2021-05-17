<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDocumentModel extends Model
{
    use HasFactory;

    protected $table = 'type_documents';

    protected $keyType = 'integer';

    protected $fillable = [
        'name',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

}
