<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Local;
use App\Models\Patient;
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
        $this->call([
            HospitalSeeder::class,
            ConsultationStatusSeeder::class,
            MedicalRegisterStatusSeeder::class,
            DiseaseSeeder::class,
            DoctorSeeder::class,
            PatientSeeder::class,
            LocalTypeSeeder::class,
            LocalSeeder::class,
            ConsultationSeeder::class,
            MedicalRegisterSeeder::class,
        ]);


    }
}
