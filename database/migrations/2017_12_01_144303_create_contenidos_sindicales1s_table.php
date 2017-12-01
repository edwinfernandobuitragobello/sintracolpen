<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidosSindicales1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenidos_sindicales1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen_contenidos_sindicales')->nullable();
            $table->string('titulo_contenidos_sindicales')->nullable();
            $table->longText('descripcion_contenidos_sindicales')->nullable();
            $table->string('autor_contenidos_sindicales')->nullable();
            $table->string('ano_contenidos_sindicales')->nullable();
            $table->string('pdf_contenidos_sindicales')->nullable();
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
        Schema::dropIfExists('contenidos_sindicales1s');
    }
}
