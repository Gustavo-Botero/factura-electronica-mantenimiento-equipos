<?php

namespace Database\Seeders;

use App\Models\MaintenanceModel;
use Illuminate\Database\Seeder;

class MaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fMaintenance = database_path('json/maintenance.json');
        $jMaintenance = file_get_contents($fMaintenance);

        foreach(json_decode($jMaintenance) as $row) {
            MaintenanceModel::create([
                'user_id'=> $row->user_id,
                'reference_id'=> $row->reference_id,
                'type_team_id'=> $row->type_team_id,
                'type_maintenance_id'=> $row->type_maintenance_id,
                'description'=> $row->description,
            ]);
        }
    }
}
