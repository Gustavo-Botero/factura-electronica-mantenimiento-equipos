<?php

namespace Database\Seeders;

use App\Models\TypeTeamModel;
use Illuminate\Database\Seeder;

class TypeTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fTypeTeam = database_path('json/typeTeam.json');
        $jTypeTeam = file_get_contents($fTypeTeam);

        foreach(json_decode($jTypeTeam) as $row) {
            TypeTeamModel::create([
                'name' => $row->name,
            ]);
        }
    }
}
