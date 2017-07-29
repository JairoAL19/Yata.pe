<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolRecicladoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sol_reciclado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_user')->NotNull;
            $table->string('cod_produc');
            $table->date('fecha_r');
            $table->float('precio_fin')->NotNull;
            $table->string('metodo_p');
            $table->string('estado');
            $table->string('courier', 250);
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sol_reciclado');
    }
}
