<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            //id_cliente, id_recepcionista
            $table->string('pedido');
            $table->timestamps();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('cliente_id')
				  ->references('id')
                  ->on('clientes');   
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
        Schema::dropIfExists('registro_clientes');
    }
}

