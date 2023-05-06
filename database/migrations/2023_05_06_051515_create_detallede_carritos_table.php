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
        Schema::create('detallede_carritos', function (Blueprint $table) {
            $table->id();
            $table->integer(' Cantidad');
	        $table->integer(' MontoTotal');
            $table->unsignedBigInteger('id_carrito');
            $table->foreign('id_carrito')->references('id')-> on ('carritos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')-> on ('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallede_carritos');
    }
};
