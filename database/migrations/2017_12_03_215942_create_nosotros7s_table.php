<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosotros7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros7s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icono_valores_nosotros')->nullable();
            $table->string('nombre_valores_nosotros')->nullable();
            $table->longText('descripcion_valores_nosotros')->nullable();
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
        Schema::dropIfExists('nosotros7s');
    }
}
