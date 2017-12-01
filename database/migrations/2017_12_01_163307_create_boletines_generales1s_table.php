<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletinesGenerales1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletines_generales1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen_boletines_generales')->nullable();
            $table->string('titulo_boletines_generales')->nullable();
            $table->longText('descripcion_boletines_generales')->nullable();
            $table->string('autor_boletines_generales')->nullable();
            $table->string('ano_boletines_generales')->nullable();
            $table->string('pdf_boletines_generales')->nullable();
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
        Schema::dropIfExists('boletines_generales1s');
    }
}
