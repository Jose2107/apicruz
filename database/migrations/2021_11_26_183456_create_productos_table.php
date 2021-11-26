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
            $table->id();
            $table->string('producto',45);
            $table->unsignedInteger('existencias');
            $table->decimal('precio_unitario',10,2);
            $table->string('fotografia',45);
            $table->tinyText('descripcion');
            $table->enum('estado',['activo','inactivo']);
            $table->decimal('tasa_iva',10,2);

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
