<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNuestrosAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuestros_afiliados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_nuestros_afiliados')->nullable();
            $table->string('descripcion_nuestros_afiliados')->nullable();
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
        Schema::dropIfExists('nuestros_afiliados');
    }
}
