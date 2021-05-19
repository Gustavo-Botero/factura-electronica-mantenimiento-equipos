<?php

namespace Database\Seeders;

use App\Models\ReferenceTypeTeamModel;
use Illuminate\Database\Seeder;

class ReferenceTypeTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fReferenceTypeTeam = database_path('json/referenceTypeTeam.json');
        $jReferenceTypeTeam = file_get_contents($fReferenceTypeTeam);

        foreach(json_decode($jReferenceTypeTeam) as $row) {
            ReferenceTypeTeamModel::create([
                'reference_id' => $row->reference_id,
                'type_team_id' => $row->type_team_id,
            ]);
        }
    }
}
