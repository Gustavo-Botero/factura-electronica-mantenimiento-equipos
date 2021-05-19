<?php

namespace Database\Seeders;

use App\Models\UserTypeUserModel;
use Illuminate\Database\Seeder;

class UserTypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fUserTypeUser = database_path('json/userTypeUser.json');
        $jUserTypeUser = file_get_contents($fUserTypeUser);

        foreach(json_decode($jUserTypeUser) as $row) {
            UserTypeUserModel::create([
                'user_id' => $row->user_id,
                'type_user_id' => $row->type_user_id,
            ]);
        }
    }
}
