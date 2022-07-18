<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_alertas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->decimal('valorFin', 10, 2);
            $table->decimal('valorInicio', 10, 2);
            $table->string('mensaje');
            $table->string('destinatarios');
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
        Schema::dropIfExists('alerta');
    }
}
