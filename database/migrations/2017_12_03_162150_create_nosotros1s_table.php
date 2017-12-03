<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosotros1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros1s', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('descripcion1_nosotros')->nullable();
            $table->longText('descripcion2_nosotros')->nullable();
            $table->string('imagen1_nosotros')->nullable();
            $table->string('imagen2_nosotros')->nullable();
            $table->string('imagen3_nosotros')->nullable();
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
        Schema::dropIfExists('nosotros1s');
    }
}
