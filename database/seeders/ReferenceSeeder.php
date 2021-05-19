<?php

namespace Database\Seeders;

use App\Models\ReferenceModel;
use Illuminate\Database\Seeder;
use League\CommonMark\Reference\ReferenceMap;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //References
        $fReferences = database_path('json/references.json');
        $jReferences = file_get_contents($fReferences);

        foreach(json_decode($jReferences) as $row){
            ReferenceModel::create([
                'name' => $row->name,
            ]);
        }
    }
}
