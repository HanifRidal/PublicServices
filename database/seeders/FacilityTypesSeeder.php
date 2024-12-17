<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilityTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facility_types')->insert([
            ['type_name' => 'Bank'],
            ['type_name' => 'Stasiun'],
            ['type_name' => 'Kantor Kecamatan'],
            ['type_name' => 'Puskesmas'],
            ['type_name' => 'Posyandu'],
        ]);
    }
}
