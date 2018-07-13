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
            $table->unsignedInteger('rooms_id');
            $table->foreign('rooms_id')
			      ->references('id')
                  ->on('rooms');
            $table->string('rooms_type');
            $table->foreign('rooms_type')
                        ->references('type')
                        ->on('rooms');
            $table->string('cant_dias');
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
