<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert([
            ['district_name' => 'ANDIR'],
            ['district_name' => 'ANTAPANI'],
            ['district_name' => 'ARCAMANIK'],
            ['district_name' => 'ASTANA ANYAR'],
            ['district_name' => 'BABAKAN CIPARAY'],
            ['district_name' => 'BANDUNG KIDUL'],
            ['district_name' => 'BANDUNG KULON'],
            ['district_name' => 'BANDUNG WETAN'],
            ['district_name' => 'BATUNUNGGAL'],
            ['district_name' => 'BOJONGLOA KALER'],
            ['district_name' => 'BOJONGLOA KIDUL'],
            ['district_name' => 'BUAHBATU'],
            ['district_name' => 'CIBEUNYING KALER'],
            ['district_name' => 'CIBEUNYING KIDUL'],
            ['district_name' => 'CIBIRU'],
            ['district_name' => 'CICENDO'],
            ['district_name' => 'DIDADAP'],
            ['district_name' => 'CINAMBO'],
            ['district_name' => 'COBLONG'],
            ['district_name' => 'GEDEBAGE'],
            ['district_name' => 'KIARACONDONG'],
            ['district_name' => 'LENGKONG'],
            ['district_name' => 'MANDALAJATI'],
            ['district_name' => 'PANYILEUKAN'],
            ['district_name' => 'RANCASARI'],
            ['district_name' => 'REGOL'],
            ['district_name' => 'SUKAJADI'],
            ['district_name' => 'SUKASARI'],
            ['district_name' => 'SUMUR BANDUNG'],
            ['district_name' => 'UJUNG BERUNG'],
        ]);
    }
}
