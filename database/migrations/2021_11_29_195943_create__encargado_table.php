<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncargadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Encargado', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cedula');
            $table->string('nivelEstudio');
            $table->string('hojaVida');
            $table->string('PDFdiploma');
            $table->string('PDFcertificadohoras');
            $table->string('PDFcertificadosalud');
            $table->string('Empresa');
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
        Schema::dropIfExists('Encargado');
    }
}
