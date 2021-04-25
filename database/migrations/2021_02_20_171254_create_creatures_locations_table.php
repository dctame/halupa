<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreaturesLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatures_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creatures_id')->unsigned();
            $table->integer('locations_id');
            $table->timestamps();
        });

        Schema::table('creatures_locations', function($table) {
            $table->foreign('creatures_id')->references('id')->on('creatures');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creatures_locations');
    }
}
