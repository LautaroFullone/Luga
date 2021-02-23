<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosComercialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosComerciales', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('nombre_comercial');
            $table->string('domicilio_comercial');
            $table->string('codigo_postal');
            $table->integer('piso');
            $table->string('departamento');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('telefono');
            $table->string('fax');
            $table->string('email');
            $table->string('expreso_envio');



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
        Schema::dropIfExists('datos_comerciales');
    }
}
