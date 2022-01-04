<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
	use HasFactory;
	public function type(){
		return $this->belongsTo(Local_type::class, "local_types", "id");
	}
	public function hospital(){
		return $this->belongsTo(Hospital::class, "hospital_id", "id");
		}
	public function consultations() {
		return $this->hasOne(Consultation::class);
	}
}
