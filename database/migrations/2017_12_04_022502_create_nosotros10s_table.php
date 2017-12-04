<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosotros10sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros10s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_comite_nosotros')->nullable();
            $table->longText('descripcion_comite_nosotros')->nullable();
            $table->string('icono_comite_nosotros')->nullable();
            $table->string('imagen_comite_nosotros')->nullable();
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
        Schema::dropIfExists('nosotros10s');
    }
}
