<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local_type extends Model
{
    use HasFactory;
    public function local() {
		return  $this->hasMany(Local::class);
    }
}
