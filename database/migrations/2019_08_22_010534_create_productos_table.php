<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('nombre');
            $table->string('slug')->unique();
            $table->string('codigo_barras')->unique();
            $table->string('proveedor');
            $table->string('familia');
            $table->string('categoria');
            $table->unsignedInteger('stock_minimo');
            $table->integer('stock');
            $table->boolean('vigente');
            $table->string('presentacion');
            $table->string('SKU');
            $table->text('descripcion');
            $table->text('detalles');
            $table->decimal('precio', 10, 2);
            $table->boolean('receta');
            $table->date('fecha_exp');
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
