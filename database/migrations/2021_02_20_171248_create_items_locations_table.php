<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('items_id');
            $table->integer('location_id');
        });

        Schema::table('items_locations', function($table) {
            $table->foreign('items_id')->references('id')->on('items');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_locations');
    }
}
