<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosSeriesPresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_series_presentations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('photo_serie_type_id')->unsigned();
            $table->foreign('photo_serie_type_id')->references('id')->on('photos_series_types');
            $table->integer('photo_serie_id')->unsigned();
            $table->foreign('photo_serie_id')->references('id')->on('photos_series');
            $table->string('url', 70);
            $table->string('title', 70);
            $table->text('text');
            $table->text('short_text');
            $table->string('meta_text', 140);
            $table->integer('pin_order')->unique();
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
        Schema::dropIfExists('photos_series_presentations');
    }
}
