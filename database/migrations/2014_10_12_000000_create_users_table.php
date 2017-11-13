<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_permission_id')->unsigned();
            $table->foreign('user_permission_id')->references('id')->on('users_permissions');
            $table->string('url', 100);
            $table->string('last_name', 60);
            $table->string('first_name', 100);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('login', 100)->unique();
            $table->string('password');
            $table->boolean('actif');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
