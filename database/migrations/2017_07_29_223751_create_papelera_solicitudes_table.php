<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapeleraSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papelera_solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_user')->NotNull;
            $table->string('act',1);
            $table->string('cod_produc');
            $table->string('fecha_r'),25;
            $table->float('precio_fin')->NotNull;
            $table->string('metodo_p');
            $table->string('estado');
            $table->string('obs');
            $table->string('courier', 250);
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
        Schema::drop('papelera_solicitudes');
    }
}
