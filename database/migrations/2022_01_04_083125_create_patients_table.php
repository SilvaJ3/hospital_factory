<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->integer("register_id")->unique();
            $table->string("fname");
            $table->string("lname");
            $table->date("birth_date");
            $table->char("gender");
            $table->string("adress");
            $table->string("country");
            $table->string("city");
            $table->integer("postcode");
            $table->string("phone");
            $table->string("contact_person");
            $table->string("contact_phone");
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
        Schema::dropIfExists('patients');
    }
}
