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
            $table->string('nombre',30)->unique();
            $table->timestamps();
        });

        //tabla pivote cancer_nino
         Schema::create('nino-cancer', function (Blueprint $table) {
            $table->date('fecha_deteccion');
            $table->boolean('activar')->default(true);
            $table->integer('cancer_id')->unsigned();
            $table->integer('nino_id');

            $table->primary(['cancer_id','nino_id']);

            $table->foreign('cancer_id')->references('id')->on('cancers')->onDelete('cascade');
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
        Schema::dropIfExists('cancers');
    }
}
