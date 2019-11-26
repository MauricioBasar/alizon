<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 71);
            $table->decimal('precio');
            $table->integer('cuota');
            $table->string('imagen', 200);
            $table->string('imagen2', 200);
            $table->string('imagen3', 200);
            $table->string('imagen4', 200);
            $table->string('imagen5', 200);
            $table->string('minidescripcion', 153);
            $table->string('descripcion', 500);
            $table->Biginteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->Biginteger('subcategoria_id')->unsigned();
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');
            $table->Biginteger('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->Biginteger('oferta_id')->unsigned();
            $table->foreign('oferta_id')->references('id')->on('ofertas');
            $table->Biginteger('calificacion_id')->unsigned();
            $table->foreign('calificacion_id')->references('id')->on('calificaciones');
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
        Schema::dropIfExists('productos');
    }
}
