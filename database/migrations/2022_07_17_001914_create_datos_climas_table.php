<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosClimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_datosclima', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('fechaHora');
            $table->decimal('temperatura', 10, 2);
            $table->decimal('humedad', 10, 2);
            $table->unsignedBigInteger('IdDispositivo')->nullable();
            $table->foreign('IdDispositivo')->references('id')->on('tbl_dispositivos');
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
        Schema::dropIfExists('datos_clima');
    }
}
