<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosotros5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros5s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icono_principios_nosotros')->nullable();
            $table->string('nombre_principios_nosotros')->nullable();
            $table->longText('descripcion_principios_nosotros')->nullable();
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
        Schema::dropIfExists('nosotros5s');
    }
}
