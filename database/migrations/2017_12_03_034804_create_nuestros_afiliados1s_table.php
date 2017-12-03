<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNuestrosAfiliados1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuestros_afiliados1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('afiliado_nuestros_afiliados')->nullable();
            $table->string('cantidad_nuestros_afiliados')->nullable();
            $table->string('latitud_nuestros_afiliados')->nullable();
            $table->string('longitud_nuestros_afiliados')->nullable();
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
        Schema::dropIfExists('nuestros_afiliados1s');
    }
}
