<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb__libros', function (Blueprint $table) {
            $table->id('idLibro');
            $table->unsignedBigInteger('id_Autor');
            $table->string('isbn');
            $table->string('titulo');
            
            $table->string('numeropag');
            $table->string('editorial');
            $table->string('correo');
            $table->foreign('id_Autor')->references('id')->on('tb__autores')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('tb__libros');
    }
};
