<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->id();
            $table->string('shortNameMinistry')->nullable();
            $table->string('ministry');
            $table->string('address');
            $table->string('landline')->nullable();
            $table->string('web')->nullable();
            $table->string('email');
            $table->string('shiftPastor')->nullable();
            $table->enum('status',['pending', 'activated', 'desactivated'])->default('desactivated');
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
        Schema::dropIfExists('churches');
    }
}
