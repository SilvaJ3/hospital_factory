<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_types')->insert(
            [
                [
                    'name' => 'bloc',
                ],
                [
                    'name' => 'bureau',
                ]
            ]
        );
    }
}
