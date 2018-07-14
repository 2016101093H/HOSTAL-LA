<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total');
            $table->string('tipo_pago',30);
            $table->date('fecha_pago',30);
            $table->timestamps();
            $table->unsignedBigInteger('reserva_id');
            $table->foreign('reserva_id')
				  ->references('id')
                  ->on('reservas');   
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
