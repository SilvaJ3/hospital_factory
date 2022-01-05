<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_register extends Model
{
    use HasFactory;
    public function diseases(){
		return $this->belongsTo(Disease::class, "disease_id", "id");
	}
    public function status(){
		return $this->belongsTo(Medical_register_status::class, "medical_register_statuses_id", "id");
	}
  public function patients() {
  return $this->belongsTo(Patient::class, "patient_id", "register_id");
  }
  public function consultation() {
  return $this->belongsTo(Consultation::class, "consultation_id", "id");
  }
}
