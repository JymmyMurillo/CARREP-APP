<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuario_producto', function (Blueprint $table) {
            $table->foreignId('usuario_id')->constrained();
            $table->foreignId('producto_id')->constrained();
            $table->integer('cantidad_asignada');
            $table->primary(['usuario_id', 'producto_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_producto');
    }
};
