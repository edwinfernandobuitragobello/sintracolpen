<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInicios1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicios1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_items_inicio')->nullable();
            $table->longText('descripcion_items_inicio')->nullable();
            $table->string('imagen_items_inicio')->nullable();
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
        Schema::dropIfExists('inicios1s');
    }
}
