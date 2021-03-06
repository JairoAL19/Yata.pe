<?php

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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('trabajo', 250);
            $table->date('fecha_naci');
            $table->string('direc', 500);
            $table->string('ciudad', 100);
            $table->string('pais', 50);
            $table->string('zip_code', 100);
            $table->string('about_me', 500);
            $table->string('cat', 100);
            $table->string('dispo',1);
            $table->string('avatar',300);
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
        Schema::drop('users');
    }
}
