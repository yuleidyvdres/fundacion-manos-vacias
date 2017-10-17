<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNinosTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ninos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nombre',30);
            $table->string('apellido',20);
            $table->enum('genero',['Niño','Niña']);
            $table->date('fecha_nacimiento');
            $table->string('situacion_actual');
            $table->integer('users_id');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('ninos');
    }
}
