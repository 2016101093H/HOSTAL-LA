<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecepcionistaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('dni',8);
            $table->string('correo',50);
            $table->string('telefono',9);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recep');
    }
    
}
