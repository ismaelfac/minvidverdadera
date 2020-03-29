<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransplantsTable extends Migration
{
    public function up()
    {
        Schema::create('transplants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->foreign('member_id')->references('id')->on('members');
            $table->unsignedBigInteger('church_id');
            $table->foreign('church_id')->references('id')->on('churches');
            $table->enum('status',['Desercion', 'Expulsion'])->default('Desercion');
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
        Schema::dropIfExists('transplants');
    }
}
