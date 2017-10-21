<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_series', function (Blueprint $table) {
            $table->integer('photo_serie_presentation')->unsigned();
            $table->foreign('photo_serie_presentation')->references('id')->on('photos_series_presentations');
            $table->integer('photo_id')->unsigned();
            $table->foreign('photo_id')->references('id')->on('photos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos_series');
    }
}
