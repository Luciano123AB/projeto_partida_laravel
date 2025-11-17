<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected = [
        "nome_completo",
        "data_nascimento",
        "foto",
        "permissao",
        "ultimo_acesso",
        "id_nota"
    ];
    
    public function notas() {
        return $this->hasMany(Nota::class);
    }
}
