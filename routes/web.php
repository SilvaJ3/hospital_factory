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
    return view("pages.hospital", compact("hospital", "consultations_filter"));
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