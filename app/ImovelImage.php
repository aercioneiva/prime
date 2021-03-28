<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImovelImage extends Model
{
    protected $table = 'imoveis_imagens';

    protected $fillable = [
        'imovel_id', 'nome_imagem', 'tipo'
    ];

    public function imovel()
    {
        return $this->belongsTo(Imovel::class,'imovel_id','id');
    }

}
