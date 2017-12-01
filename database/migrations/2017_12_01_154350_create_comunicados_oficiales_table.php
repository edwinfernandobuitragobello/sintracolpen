<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunicadosOficialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunicados_oficiales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_comunicados_oficiales')->nullable();
            $table->string('descripcion_comunicados_oficiales')->nullable();
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
        Schema::dropIfExists('comunicados_oficiales');
    }
}
