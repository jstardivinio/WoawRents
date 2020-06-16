<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropretiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propreties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Owner_id');
            //$table->foreign('Owner_id')->references('id')->on('Owner');
            $table->unsignedBigInteger('Care_taker_id');
            //$table->foreign('Care_taker_id')->references('id')->on('Care_taker');
            $table->string('Name')->nullable();
            $table->string('Standard');
            $table->unsignedBigInteger('Address_id');
            //$table->foreign('Address_id')->references('id')->on('Property_address');
            $table->text('Description');
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
        Schema::dropIfExists('propreties');
    }
}
