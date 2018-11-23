<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('libro');
            $table->string('estudiante');
            $table->string('empleado');
            $table->dateTime('prestamo');
            $table->dateTime('entrega');
            $table->unsignedInteger('libro_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prestamos');
    }
}
