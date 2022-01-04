<?php

namespace Database\Factories;

use App\Models\Consultation;
use App\Models\Consultation_status;
use App\Models\Disease;
use App\Models\Doctor;
use App\Models\Local;
use App\Models\Medical_register_status;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $starting_date = Carbon::createFromFormat("Y/m/d", "2021/06/01");
        $end_date = Carbon::createFromFormat("Y/m/d", "2022/01/31");
        $starting_time = Carbon::createFromFormat("H:i", "08:00");
        $end_time = Carbon::createFromFormat("H:i", "19:00");

        do {
            $date = $this->faker->dateTimeBetween($starting_date, $end_date);
            $time = $this->faker->dateTimeBetween($starting_time, $end_time);
            $patient = Patient::inRandomOrder()->first();
            $doctor = Doctor::inRandomOrder()->first();
            $patientAvailable = $patient->consultations()->where('schedule_hours', $time)->first();
            $doctorAvailable = $doctor->consultations()->where('schedule_hours', $time)->where('schedule_time', $date)->first();
        } while ($patientAvailable || $doctorAvailable);

        if ($date > Carbon::now()) {
            $status = Consultation_status::inRandomOrder()->first()->id;
        } else {
            $status = Consultation_status::inRandomOrder()->first()->id;
        }

        if ($status == 4) {

            $disease = Disease::inRandomOrder()->first();
            if ($disease->curable) {
                $status_disease = Medical_register_status::inRandomOrder()->first();
            } else {
                $status_disease = Medical_register_status::all()->where("status", "incurable")->first();
            }

            DB::table("medical_registers")->insert([
                [
                    "patient_id" => $patient->register_id,
                    "medical_register_statuses_id" => $status_disease->id,
                    "disease_id" => $disease->id,
                    "consultation_id" => Consultation::all()->count()+1
                ],
            ]);
        }

        return [
            'doctor_id' => $doctor->id,
            'patient_id' => $patient->register_id,
            'schedule_time' => Carbon::parse($date)->format('Y/m/d'),
            'schedule_hours' => Carbon::parse($time)->format('H:i'),
            'consultation_statuses_id' => $status,
            'local_id' => Local::inRandomOrder()->first()->id,
        ];

    }
}
