<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTeamModel extends Model
{
    use HasFactory;

    protected $table = 'type_teams';

    protected $keyType = 'integer';

    protected $fillable = [
        'id',
        'name',
    ];

    public function maintenances(){
        return $this->hasMany(MaintenanceModel::class);
    }

    public function referencesTypeTeams(){
        return $this->hasMany(ReferenceTypeTeamModel::class);
    }
}
