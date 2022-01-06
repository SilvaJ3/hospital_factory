<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
  use HasFactory;
  public function doctors() {
  return $this->belongsTo(Doctor::class, "doctor_id", "id");
  }
  public function patients() {
  return $this->belongsTo(Patient::class, "patient_id", "register_id");
  }
  public function register() {
  return $this->hasOne(Medical_register::class);
  }
  public function status(){
  return $this->belongsTo(Consultation_status::class, "consultation_statuses_id", "id");
  }
  public function local(){
  return $this->belongsTo(Local::class, "local_id", "id");
  }
  public function doctor_name(){
    return $this->doctors()->first()->name;
  }
}
