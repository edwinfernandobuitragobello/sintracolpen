<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosotros11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros11s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_bogota_nosotros')->nullable();
            $table->longText('descripcion_bogota_nosotros')->nullable();
            $table->string('icono_bogota_nosotros')->nullable();
            $table->string('imagen_bogota_nosotros')->nullable();
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
        Schema::dropIfExists('nosotros11s');
    }
}
