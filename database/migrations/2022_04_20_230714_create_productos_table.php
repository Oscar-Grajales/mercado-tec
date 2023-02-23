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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('piezas');
            $table->string('descripcion');
            $table->timestamp('fecha_publicacion');
            $table->tinyInteger('esta_consignado')->default(0);
            $table->decimal('porcentaje', 4, 2); 
            $table->decimal('precio', 7, 2); 
            $table->string('razon_consigna');
            $table->timestamps();

            $table->foreignId('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
};
