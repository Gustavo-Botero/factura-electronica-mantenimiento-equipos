<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMaintenanceModel extends Model
{
    use HasFactory;

    protected $table = 'type_maintenances';

    protected $keyType = 'integer';

    protected $fillable = [
        'name',
    ];

    public function maintenances(){
        return $this->hasMany(MaintenanceModel::class);
    }
}
