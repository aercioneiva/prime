<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',200);
            $table->string('endereco',200);
            $table->integer('ref')->unique();
            $table->double('area',8,2);
            $table->integer('bwc');
            $table->integer('dormitorios');
            $table->integer('vagas');
            $table->double('valor', 15, 2);
            $table->enum('tipo', ['vr','vc', 'lc'])
            ->comment('vr = Venda Residencial, vc = Venda Comercial, lc = Locacao Comercial');
            $table->string('nome_imagem',200);
            $table->text('descricao');
            $table->enum('destacar', ['s','n'])
                  ->default('n')
                  ->comment('s = Destacar Imovel, n = Nao destacar');
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
        Schema::dropIfExists('imoveis');
    }
}
