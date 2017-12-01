<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosOficiales1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_oficiales1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen_documentos_oficiales')->nullable();
            $table->string('titulo_documentos_oficiales')->nullable();
            $table->longText('descripcion_documentos_oficiales')->nullable();
            $table->string('autor_documentos_oficiales')->nullable();
            $table->string('ano_documentos_oficiales')->nullable();
            $table->string('pdf_documentos_oficiales')->nullable();
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
        Schema::dropIfExists('documentos_oficiales1s');
    }
}
