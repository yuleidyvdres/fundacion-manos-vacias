<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactosTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->timestamps();
        });

          Schema::create('nino-contacto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valor');
            $table->integer('contacto_id')->unsigned();
            $table->integer('nino_id');

            $table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade');
            $table->foreign('nino_id')->references('id')->on('ninos')->onDelete('cascade');

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
        Schema::dropIfExists('contactos');
    }
}
