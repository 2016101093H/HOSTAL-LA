<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->bigIncrements('id');
            //id_cliente, id_usuario, id_habitac,
            $table->date('fech_inicio');
            $table->date('fech_fin');
            $table->timestamps();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('cliente_id')
				  ->references('id')
                  ->on('clientes');   
            $table->foreign('room_id')
			      ->references('id')
                  ->on('rooms'); 
            $table->foreign('user_id')
			      ->references('id')
                  ->on('users');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
