<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalRegisterStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medical_register_statuses')->insert([
            [
            "status" => "diagnostic",
            ],
            [
            "status" => "pending",
            ],
            [
            "status" => "healed",
            ],
            [
            "status" => "incurable",
            ],
        ]);
    }
}
