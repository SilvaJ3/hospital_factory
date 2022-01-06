<?php

use App\Models\Consultation;
use App\Models\Hospital;
use App\Models\Local;
use App\Models\Medical_register;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $hospitals = Hospital::all();
    return view('welcome', compact("hospitals"));
});

Route::get("/hospital/{id}", function($id){
    $hospital = Hospital::where("id", $id)->first();
    $locals = Local::where("hospital_id", $id)->get();
    $consultations_filter = [];
    foreach ($locals as $local) {
        $consultations = Consultation::where("local_id", $local->id)->orderByDesc("schedule_time")->get();
        foreach ($consultations as $consultation) {
            array_push($consultations_filter, $consultation);
        }
    }

    usort($consultations_filter, function ($item1, $item2) {
        return $item2['schedule_time'] <=> $item1['schedule_time'];
    });

    $collection_data = [];

    foreach ($consultations_filter as $consultation) {
        if($consultation->register()->first()) {
            // dd($consultation->register()->first()->status()->first()->status);
            $collection = 
            (object) [
                "id" => $consultation->id,
                "doctor" => $consultation->doctors()->first()->name,
                "patient_id" => $consultation->patients()->first()->register_id,
                "patient_fname" => $consultation->patients()->first()->fname,
                "patient_lname" => $consultation->patients()->first()->lname,
                "schedule_time" => $consultation->schedule_time,
                "schedule_hours" => $consultation->schedule_hours,
                "status" => $consultation->status()->first()->status,
                "diagnostic" => $consultation->register()->first()->status()->first()->status,
                "local" => $consultation->local()->first()->name
            ];
        } else {
            $collection = 
            (object) [
                "id" => $consultation->id,
                "doctor" => $consultation->doctors()->first()->name,
                "patient_id" => $consultation->patients()->first()->register_id,
                "patient_fname" => $consultation->patients()->first()->fname,
                "patient_lname" => $consultation->patients()->first()->lname,
                "schedule_time" => $consultation->schedule_time,
                "schedule_hours" => $consultation->schedule_hours,
                "status" => $consultation->status()->first()->status,
                "diagnostic" => "null",
                "local" => $consultation->local()->first()->name
            ];;
        }
        array_push($collection_data, $collection);


    }
    // dd($collection_data);
    return view("pages.hospital", compact("hospital", "collection_data"));
});

Route::get("/patients", function(){
    $patients = Patient::all();
    return view("pages.patients.patients", compact("patients"));
});

Route::get("/patients/{id}", function($id) {
    $patient = Patient::where("register_id", $id)->first();
    $medicals = Medical_register::where("patient_id", $patient->register_id)->get();
    return view("pages.patients.show", compact("patient", "medicals"));
});