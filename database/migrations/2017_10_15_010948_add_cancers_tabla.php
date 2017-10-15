<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCancersTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->timestamps();
        });

        //tabla pivote cancer_nino
         Schema::create('nino-cancer', function (Blueprint $table) {
            $table->date('fecha_deteccion');
            $table->integer('cancer_id')->unsigned();
            $table->integer('nino_partida');

            $table->primary(['cancer_id','nino_partida']);

            $table->foreign('cancer_id')->references('id')->on('cancers')->onDelete('cascade');
            $table->foreign('nino_partida')->references('partida')->on('ninos')->onDelete('cascade');

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
        Schema::dropIfExists('cancers');
    }
}
