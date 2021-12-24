<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobres', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->id();
            //$table->unsignedInteger('empresa_id'); 
            //$table->foreign('empresa_id')->references('id')->on('empresas');
            $table->string('sobre_a')->nullable();
            $table->string('sobre_b')->nullable();
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
        Schema::dropIfExists('sobres');
    }
}
