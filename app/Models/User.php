<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $fillable = [
        "name",
        "email",
        "password",
        "data_nascimento",
        "foto",
        "permissao",
        "ultimo_acesso",
        "id_nota"
    ];
    
    public function notas(): HasMany {
        return $this->hasMany(Nota::class);
    }
}
