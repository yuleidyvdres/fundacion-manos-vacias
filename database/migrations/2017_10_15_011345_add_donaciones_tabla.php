<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDonacionesTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->enum('tipo',['Medicamento','Insumo']);
            $table->timestamps();
        });

          Schema::create('nino-donacion', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status',['Recibido','No-recibido']);
            $table->enum('urgencia',['Poca','Mediana','Mucha']);
            $table->string('descripcion')->nullable();
            $table->string('comentario')->nullable();
            $table->integer('donaciones_id')->unsigned();
            $table->integer('nino_partida');

            $table->foreign('donaciones_id')->references('id')->on('donaciones')->onDelete('cascade');
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
        Schema::dropIfExists('donaciones');
    }
}
