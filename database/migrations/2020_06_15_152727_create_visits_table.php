<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Housing_id');
            //$table->foreign('Housing_id')->references('id')->on('Housing');
            $table->bigInteger('Agent_id');
            //$table->foreign('Agent_id')->references('id')->on('Agent');
            $table->string('Visitor_name');
            $table->bigInteger('Visitor_id')->nullable();
            $table->dateTime('Due_date', 0);
            $table->string('Status');
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
        Schema::dropIfExists('visits');
    }
}
