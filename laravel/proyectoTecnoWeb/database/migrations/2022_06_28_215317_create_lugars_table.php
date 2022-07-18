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
        Schema::create('lugars', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nombre', 20);
            $table->string('descripcion', 500);
            $table->string('direccion', 100)->unique();
            $table->string('imagenLugar')->nullable();
            $table->timestamps();
            $table->foreignId('usuarioID')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugars');
    }
};
