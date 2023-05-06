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
        Schema::create('detallede_facturas', function (Blueprint $table) {
            $table->id();
            $table->date(' Fecha');
	        $table->time(' Hora');
	        $table->double(' MontoTotal');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')-> on ('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_factura');
            $table->foreign('id_factura')->references('id')-> on ('facturas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallede_facturas');
    }
};
