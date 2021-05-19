<?php

namespace Database\Seeders;

use App\Models\TypeDocumentModel;
use Illuminate\Database\Seeder;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fTypeDocument = database_path('json/typeDocument.json');
        $jTypeDocument = file_get_contents($fTypeDocument);

        foreach(json_decode($jTypeDocument) as $row) {
            TypeDocumentModel::create([
                'name' => $row->name,
            ]);
        }
    }
}
