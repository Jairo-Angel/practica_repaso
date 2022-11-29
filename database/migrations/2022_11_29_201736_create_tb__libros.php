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
            $table->increments('idLibro');
            $table->string('isbn');
            $table->string('titulo');
            $table->string('autor');
            $table->string('numeropag');
            $table->string('editorial');
            $table->string('correo');
            $table->foreignId('id_tb__autores')->constrained('tb__autores');
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
