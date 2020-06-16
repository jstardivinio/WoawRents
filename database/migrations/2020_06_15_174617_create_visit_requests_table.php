<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Housing_id');
            //$table->foreign('Housing_id')->references('id')->on('Housing');
            $table->string('Visitor_name');
            $table->string('Visitor_last_name');
            $table->integer('Visitor_phone');
            $table->string('Visitor_email');
            $table->unique('Visitor_email');
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
        Schema::dropIfExists('visit_requests');
    }
}
