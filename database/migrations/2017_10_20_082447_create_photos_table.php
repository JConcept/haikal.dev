<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('photo_serie_id')->unsigned();
            $table->foreign('photo_serie_id')->references('id')->on('photos_series');
            $table->string('url', 70);
            $table->string('path');
            $table->string('title', 70);
            $table->string('meta_desc', 140);
            $table->integer('pin_order');
            $table->timestamp('date_order');
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
        Schema::dropIfExists('photos');
    }
}
