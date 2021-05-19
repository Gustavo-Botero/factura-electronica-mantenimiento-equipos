<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ReferenceSeeder::class);
        $this->call(TypeMaintenanceSeeder::class);
        $this->call(TypeUserSeeder::class);
        $this->call(TypeDocumentSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TypeTeamSeeder::class);
        $this->call(UserTypeUserSeeder::class);
        $this->call(ReferenceTypeTeamSeeder::class);
        $this->call(MaintenanceSeeder::class);

    }
}
