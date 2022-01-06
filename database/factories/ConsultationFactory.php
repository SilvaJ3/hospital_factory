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
        $starting_date = Carbon::parse('2021-06-01');
        $end_date = Carbon::parse('2022-01-31');
        $starting_time = Carbon::createFromFormat("H:i", "08:00");
        $end_time = Carbon::createFromFormat("H:i", "19:00");

        do {
            // $date = $end_date->subDays(rand(0, 244));
            $date = $this->faker->dateTimeBetween($starting_date, $end_date);
            $time = $this->faker->dateTimeBetween($starting_time, $end_time);
            $patient = Patient::inRandomOrder()->first();
            $doctor = Doctor::inRandomOrder()->first();
            $patientAvailable = $patient->consultations()->where('schedule_hours', $time)->first();
            $doctorAvailable = $doctor->consultations()->where('schedule_hours', $time)->where('schedule_time', $date)->first();
        } while ($patientAvailable || $doctorAvailable);

        if ($date < Carbon::now()) {
        // if ($today->greaterThan($date)) {
            // 3 chances sur 4 que le rendez-vous a été fait si la date est passée
            $shuffleArray = [2, 4, 4, 4, 3, 4, 4, 4];
            $index = array_rand($shuffleArray);
            $status = Consultation_status::where("id", $shuffleArray[$index])->first();
        } else {
            // 1 chance sur 3 que le rendez-vous futur soit déjà annulé
            $shuffleArray = [1, 1, 2];
            $index = array_rand($shuffleArray);
            $status = Consultation_status::where("id", $shuffleArray[$index])->first();
        }

        return [
            'doctor_id' => $doctor->id,
            'patient_id' => $patient->register_id,
            'schedule_time' => Carbon::parse($date)->format('Y/m/d'),
            'schedule_hours' => Carbon::parse($time)->format('H:i'),
            'consultation_statuses_id' => $status->id,
            'local_id' => Local::inRandomOrder()->first()->id,
        ];

        
    }
            
}