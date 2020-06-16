<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareTakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('care_takers', function (Blueprint $table) {
            $table->id();
            $table->string('First_name');
            $table->string('Last_name');
            $table->unsignedBigInteger('Address_id');
            //$table->foreign('Address_id')->references('id')->on('Care_taker_address');
            $table->unsignedBigInteger('Contact_id');
            //$table->foreign('Contact_id')->references('id')->on('Care_taker_contact');
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
        Schema::dropIfExists('care_takers');
    }
}
