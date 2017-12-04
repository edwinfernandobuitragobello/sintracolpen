<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosotros9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros9s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_junta_nosotros')->nullable();
            $table->longText('descripcion_junta_nosotros')->nullable();
            $table->string('icono_junta_nosotros')->nullable();
            $table->string('imagen_junta_nosotros')->nullable();
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
        Schema::dropIfExists('nosotros9s');
    }
}
