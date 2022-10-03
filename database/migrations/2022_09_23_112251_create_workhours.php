<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workhours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->time('start_time');
            $table->time('end_time');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('film_id');
            $table->foreign('day_id')->references('id')->on('days');
            $table->foreign('film_id')->references('id_film')->on('films');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workhours');
     
    }
};
