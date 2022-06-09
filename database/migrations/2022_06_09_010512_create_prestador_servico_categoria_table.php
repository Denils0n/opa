<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestadorServicoCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestador_servico_categoria', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('prestador_id');
            $table->foreignId('servico_id');
            $table->foreignId('categoria_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestador_servico_categoria');
    }
}
