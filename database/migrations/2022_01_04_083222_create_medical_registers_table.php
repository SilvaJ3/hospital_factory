<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_registers', function (Blueprint $table) {
            $table->id();
            $table->integer("patient_id");
            $table->foreign("patient_id")->on("patients")->references("register_id");
            $table->foreignId("medical_register_statuses_id")->constrained();
            $table->foreignId("disease_id")->constrained();
            $table->foreignId("consultation_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_registers');
    }
}
