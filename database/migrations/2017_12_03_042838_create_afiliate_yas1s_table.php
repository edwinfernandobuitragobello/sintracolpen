<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfiliateYas1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliate_yas1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen1_afiliate_ya')->nullable();
            $table->string('imagen2_afiliate_ya')->nullable();
            $table->string('pfd_afiliate_ya')->nullable();
            $table->string('correo_afiliate_ya')->nullable();
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
        Schema::dropIfExists('afiliate_yas1s');
    }
}
