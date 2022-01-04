<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
  use HasFactory;
  public function doctors() {
  return $this->belongsTo(Patient::class, "doctor_id", "id");
  }
  public function patients() {
  return $this->belongsTo(Patient::class, "patient_id", "register_id");
  }
  public function register() {
  return $this->belongsTo(Medical_register::class, "register_id", "id");
  }
  public function status(){
  return $this->belongsTo(Consultation_status::class, "status_id", "id");
  }
  public function local(){
  return $this->belongsTo(Local::class, "local_id", "id");
  }
}
