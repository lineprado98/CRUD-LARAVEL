<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'user';
    use HasFactory;

    public $fillable  = [
        "id",
        "name",
        "email",
        "cpf",
        "token"
        ];


        public function end()
        {
            return $this->hasOne('App\Models\Address', 'id', 'id_address');
        }

}


