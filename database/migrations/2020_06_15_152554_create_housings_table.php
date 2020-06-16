<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Property_id');
            //$table->foreign('Property_id')->references('id')->on('Property');
            $table->string('Type');
            $table->string('Class');
            $table->string('Status');
            $table->integer('Living_room');
            $table->integer('Kitchen');
            $table->integer('Bedroom');
            $table->integer('Toilet');
            $table->String('Toilet_type');
            $table->integer('Seen')->nullable();
            $table->integer('Visited')->nullable();
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
        Schema::dropIfExists('housings');
    }
}
