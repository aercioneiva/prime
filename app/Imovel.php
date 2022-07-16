<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'imoveis';

    protected $fillable = [
        'titulo', 'slug', 'endereco', 'ref', 'area', 'bwc', 'dormitorios','vagas', 'valor', 'tipo','nome_imagem','nome_imagem_mobile', 'descricao', 'destacar'
    ];

    public function imagens()
    {
        return $this->hasMany(ImovelImage::class, 'imovel_id', 'id');
    }
}
