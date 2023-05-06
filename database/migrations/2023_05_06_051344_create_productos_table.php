<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string(' Nombre');
	        $table->integer(' Precio');
	        $table->boolean(' Estado');
	        $table->string(' Color');
	        $table->longText(' Descripcion');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')-> on ('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
