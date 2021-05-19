<?php

namespace Database\Seeders;

use App\Models\TypeUserModel;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fTypeUser = database_path('json/typeUser.json');
        $jTypeUser = file_get_contents($fTypeUser);

        foreach(json_decode($jTypeUser) as $row) {
            TypeUserModel::create([
                'name' => $row->name,
            ]);
        }
    }
}
