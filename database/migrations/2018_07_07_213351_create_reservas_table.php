<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //id_cliente, id_usuario, id_habitac,
            $table->date('inicio');
            $table->integer('cant_dias');
            $table->integer('cant_hab');
            $table->string('type');
            $table->string('nombre');
            $table->string('tipo_pago');
            $table->integer('total_pago');
            $table->string('slug');
            $table->timestamps();
            /*$table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('cliente_id')
				  ->references('id')
                  ->on('clientes');*/ 
            
            /*$table->foreign('user_id')
			      ->references('id')
                  ->on('users');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
