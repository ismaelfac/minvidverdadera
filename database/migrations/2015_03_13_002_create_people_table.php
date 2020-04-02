<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('dni')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('slug');
            $table->enum('bloodType',['O+','A+','B+','AB+']);
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('departament_id');
            $table->foreign('departament_id')->references('id')->on('departaments');
            $table->unsignedBigInteger('municipality_id');
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('neighborhood_id');
            $table->foreign('neighborhood_id')->references('id')->on('neighborhoods');
            $table->string('address');
            $table->string('landline')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('dateBirth');
            $table->unsignedBigInteger('identification_id');
            $table->foreign('identification_id')->references('id')->on('identifications');
            $table->enum('status',['pending', 'activated', 'desactivated'])->default('pending');
            $table->timestamps();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
