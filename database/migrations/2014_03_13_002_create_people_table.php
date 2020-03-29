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
            $table->string('dni');
            $table->enum('gender', ['male', 'female']);
            $table->string('firstName');
            $table->string('lastName');
            $table->enum('bloodType',['O+','A+','B+','AB+']);
            $table->string('address');
            $table->string('landline')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('dateBirth');
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
