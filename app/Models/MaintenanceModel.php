<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceModel extends Model
{
    use HasFactory;

    protected $table = 'maintenances';

    protected $fillable = [
        'user_id',
        'reference_id',
        'type_team_id',
        'type_maintenance_id',
        'descripion',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reference(){
        return $this->belongsTo(ReferenceModel::class);
    }

    public function typeTeam(){
        return $this->belongsTo(TypeTeamModel::class);
    }

    public function typeMaintenance(){
        return $this->belongsTo(TypeMaintenanceModel::class);
    }

}
