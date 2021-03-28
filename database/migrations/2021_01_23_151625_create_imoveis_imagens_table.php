<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis_imagens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('imovel_id');
            $table->foreign('imovel_id')
                  ->references('id')
                  ->on('imoveis')
                  ->onDelete('cascade');
            $table->string('nome_imagem',200);      
            $table->enum('tipo', ['s','g'])
            ->comment('s = Slide, g = Galeria');
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
        Schema::dropIfExists('imoveis_imagens');
    }
}
