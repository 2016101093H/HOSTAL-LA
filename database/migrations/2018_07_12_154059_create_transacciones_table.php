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
            $table->foreign('huesped_id')
                    ->references('id')
                    ->on('huesped');
            $table->foreign('cuarto_id')
                    ->references('id')
                    ->on('cuarto');
            $table->string('cuarto_no');
            $table->string('cama_extra');
            $table->string('status');
            $table->string('cama_extra');
            $table->unsignedInteger('dias',2);
            $table->date('registro');
            $table->time('fecha_registro');
            $table->date('realiza_pedido');
            $table->time('fecha_realizacion_pedido');
            $table->string('monto');
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
        Schema::dropIfExists('transacciones');
    }
}
