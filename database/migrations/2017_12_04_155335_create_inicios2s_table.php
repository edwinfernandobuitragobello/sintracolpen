<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInicios2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicios2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_primera_inicio')->nullable();
            $table->longText('descripcion_primera_inicio')->nullable();
            $table->string('imagen_primera_inicio')->nullable();
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
        Schema::dropIfExists('inicios2s');
    }
}
