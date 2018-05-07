<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa');
            $table->string('modelo');
            $table->string('descProblema');
            $table->integer('fk_id_oficina')->unsigned();
            $table->foreign('fk_id_oficina')->references('id')->on('oficinas');
            $table->integer('fk_id_cliente')->unsigned();
            $table->foreign('fk_id_cliente')->references('id')->on('clientes');
            $table->string('latUser');
            $table->string('logUser');
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
        Schema::dropIfExists('registros');
    }
}
