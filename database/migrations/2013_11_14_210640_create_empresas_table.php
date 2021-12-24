<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_empresa')->unique()->required();
            $table->string('nombre_corto')->required();
            $table->string('tipo_empresa')->required();
            $table->string('rep_empresa')->required();
            $table->string('email_empresa')->required();
            $table->string('direccion')->required();
            $table->string('telf_empresa')->required();
            $table->string('socios')->required();
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
        Schema::dropIfExists('empresas');
    }
}