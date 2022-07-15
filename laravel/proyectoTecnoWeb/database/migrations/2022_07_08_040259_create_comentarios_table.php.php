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
        Schema::create('comentarios', function (Blueprint $table) {

            $table->id();
            $table->foreignId('lugarID')->constrained('lugars')->onDelete('cascade');
            $table->foreignId('usuarioID')->constrained('users')->onDelete('cascade');
            $table->foreignId('comentarioID')->nullable()->constrained('comentarios')->onDelete('cascade');
            $table->text('text');
            $table->string('imagen')->nullable();
            $table->rememberToken();
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
        //
    }
};
