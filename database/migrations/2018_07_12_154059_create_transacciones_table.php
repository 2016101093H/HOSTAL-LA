<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cuarto_no');
            $table->string('cama_extra');
            $table->string('status');
            $table->unsignedInteger('dias');
            $table->date('registro');
            $table->time('fecha_registro');
            $table->date('realiza_pedido');
            $table->time('fecha_realizacion_pedido');
            $table->string('monto');
            $table->timestamps();
            $table->unsignedBigInteger('huesped_id');
            $table->unsignedInteger('cuarto_id');
            $table->foreign('huesped_id')
                    ->references('id')
                    ->on('huespeds');
            $table->foreign('cuarto_id')
                    ->references('id')
                    ->on('cuartos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacciones');
    }
}
