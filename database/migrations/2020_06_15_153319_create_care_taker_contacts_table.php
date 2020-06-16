<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareTakerContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care_taker_contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('Phone1');
            $table->integer('Phone2')->nullable();
            $table->string('Email')->nullable();
            $table->unique('Email');
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
        Schema::dropIfExists('care_taker_contacts');
    }
}
