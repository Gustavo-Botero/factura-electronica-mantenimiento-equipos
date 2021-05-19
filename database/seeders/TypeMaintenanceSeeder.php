<?php

namespace Database\Seeders;

use App\Models\TypeMaintenanceModel;
use Illuminate\Database\Seeder;

class TypeMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fTypeMaintenance = database_path('json/typeMaintenance.json');
        $jTypeMaintenance = file_get_contents($fTypeMaintenance);

        foreach(json_decode($jTypeMaintenance) as $row) {
            TypeMaintenanceModel::create([
                'name' => $row->name,
            ]);
        }
    }
}
