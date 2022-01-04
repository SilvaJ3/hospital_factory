<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultation_statuses')->insert([
            [
            "status" => "scheduled",
            ],
            [
            "status" => "canceled",
            ],
            [
            "status" => "missed",
            ],
            [
            "status" => "done",
            ],
        ]);
    }
}
