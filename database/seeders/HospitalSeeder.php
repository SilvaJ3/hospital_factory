<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            [
            "name" => "CHU Saint-Pierre Site Porte de Hal",
            "adress" => "Rue aux Laines 105, 1000 Bruxelles",
            ],
            [
            "name" => "Hôpital d'Etterbeek-Ixelles",
            "adress" => "Rue Jean Paquot 63, 1050 Ixelles",
            ],
            [
            "name" => "CHIREC - Hôpital Delta",
            "adress" => "Bd du Triomphe 201, 1160 Auderghem",
            ],
        ]);
    }
}
