<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlacesInteres1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlaces_interes1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen_enlaces_interes')->nullable();
            $table->longText('nombre_enlaces_interes')->nullable();
            $table->string('enlace_enlaces_interes')->nullable();
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
        Schema::dropIfExists('enlaces_interes1s');
    }
}
