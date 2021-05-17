<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceModel extends Model
{
    use HasFactory;

    protected $table = 'references';

    protected $keyType = 'integer';

    protected $fillable = [
        'name',
    ];

    public function maintenances(){
        return $this->hasMany(MaintenanceModel::class);
    }

    public function referencesTypeTeam(){
        return $this->hasMany(referencesTypeTeam::class);
    }
}
