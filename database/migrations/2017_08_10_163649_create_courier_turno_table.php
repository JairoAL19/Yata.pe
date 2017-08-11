<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourierTurnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier_turno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_user')->NotNull;
            $table->string('dia');
            $table->string('hora');
            $table->string('dispo',1);
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
        Schema::drop('courier_turno');
    }
}
