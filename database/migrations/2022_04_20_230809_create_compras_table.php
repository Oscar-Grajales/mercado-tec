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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->string('voucher')->nullable(); // verificar tipo de dato para guardar imagen
            $table->tinyInteger('esta_validada')->default(0);
            $table->integer('piezas');
            $table->integer('calificacion')->nullable();
            $table->timestamps();

            $table->foreignId('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreignId('pago_id')->references('id')->on('pagos');            
            $table->foreignId('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
};
