<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunicadosOficiales1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunicados_oficiales1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen_comunicados_oficiales')->nullable();
            $table->string('titulo_comunicados_oficiales')->nullable();
            $table->longText('descripcion_comunicados_oficiales')->nullable();
            $table->string('autor_comunicados_oficiales')->nullable();
            $table->string('ano_comunicados_oficiales')->nullable();
            $table->string('pdf_comunicados_oficiales')->nullable();
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
        Schema::dropIfExists('comunicados_oficiales1s');
    }
}
