<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fUser = database_path('json/user.json');
        $jUser = file_get_contents($fUser);

        foreach(json_decode($jUser) as $row) {
            User::create([
                'first_name'=> $row->first_name,
                'last_name'=> $row->last_name,
                'email'=> $row->email,
                'type_document_id'=> $row->type_document_id,
                'num_document'=> $row->num_document,
                'password'=> $row->password,
                'num_phone'=> $row->num_phone,
                'address'=> $row->address,
            ]);
        }
    }
}
