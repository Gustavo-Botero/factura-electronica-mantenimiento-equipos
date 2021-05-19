<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceTypeTeamModel extends Model
{
    use HasFactory;

    protected $table = 'reference_type_team';

    protected $keyType = 'integer';

    protected $fillable = [
        'reference_id',
        'type_team_id',
    ];

    public function references(){
        return $this->belongsTo(ReferenceModel::class);
    }

    public function typeTeam(){
        return $this->belongsTo(TypeTeamModel::class);
    }
}
