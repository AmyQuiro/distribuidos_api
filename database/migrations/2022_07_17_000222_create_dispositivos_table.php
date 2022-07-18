<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispositivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idEstacion');
            $table->datetime('fechaHoraReg');
            $table->datetime('ultimaFechaDatos');
            $table->decimal('ultimaTemp', 10, 2);
            $table->decimal('ultimaHumed', 10, 2);
            $table->string('estado');


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
        Schema::dropIfExists('dispositivos');
    }
}
