<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    public $table = 'servicos';
    use HasFactory;

    public $fillable  = [
        "id",
        "titulo",
        "descricao",
        "valor",
        "id_categoria",
        "id_user"

        ];

        public function categorias()
        {
            return $this->hasMany('App\Models\Categoria', 'id', 'id_categoria');
        }


}


