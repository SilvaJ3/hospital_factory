<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function registers() {
		return $this->hasMany(Medical_register::class);
    }
    public function consultations() {
		return $this->hasMany(Consultation::class);
    }
}
