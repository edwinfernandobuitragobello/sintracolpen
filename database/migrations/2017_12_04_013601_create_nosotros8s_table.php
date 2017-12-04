<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosotros8sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros8s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_organismos_nosotros')->nullable();
            $table->longText('descripcion_organismos_nosotros')->nullable();
            $table->string('icono_organismos_nosotros')->nullable();
            $table->string('imagen_organismos_nosotros')->nullable();
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
        Schema::dropIfExists('nosotros8s');
    }
}
