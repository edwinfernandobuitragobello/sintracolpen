<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactenos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_contactenos')->nullable();
            $table->longText('descripcion_contactenos')->nullable();
            
            $table->longText('texto_descriptivo_contactenos')->nullable();
            $table->longText('domicilio_principal_contactenos')->nullable();
            $table->longText('oficina1_contactenos')->nullable();
            $table->longText('Notificaciones_contactenos')->nullable();
            $table->longText('oficina2_contactenos')->nullable();
            $table->longText('correo_contactenos')->nullable();
            $table->longText('telefono_contactenos')->nullable();
            $table->longText('twitter_contactenos')->nullable();
            $table->longText('instagram_contactenos')->nullable();
            $table->longText('youtube_contactenos')->nullable();
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
        Schema::dropIfExists('contactenos');
    }
}
