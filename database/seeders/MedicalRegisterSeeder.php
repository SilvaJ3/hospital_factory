<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Disease;
use App\Models\Medical_register;
use App\Models\Medical_register_status;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $consultations = Consultation::where("consultation_statuses_id", 4)->get();

        foreach ($consultations as $consultation) {

            $patient = Patient::where("register_id",$consultation->patient_id)->first();
            $medicals = Medical_register::where("patient_id", $patient->register_id)->get();
            
            $disease = Disease::inRandomOrder()->first();
            if ($medicals->count() > 1) {
                $medicals_registers = [];
                foreach ($medicals as $medical) {
                    array_push($medicals_registers, $medical);
                }
                foreach ($medicals_registers as $medical) {
                    if ($disease->id == $medical->disease_id) {
                        $disease = Disease::where("name", "!=", $disease)->inRandomOrder()->first();
                    }
                }
            }

            if ($disease->curable) {
                $status_disease = Medical_register_status::where("status", "!=", "incurable")->inRandomOrder()->first();
            } else {
                $status_disease = Medical_register_status::all()->where("status", "incurable")->first();
            }

            if ($medicals->count() < 5) {

                DB::table("medical_registers")->insert([
                        [
                                "patient_id" => $patient->register_id,
                                "medical_register_statuses_id" => $status_disease->id,
                                "disease_id" => $disease->id,
                                "consultation_id" => $consultation->id,
                            ],
                        ]);
                    }
            }
            

    }
}
