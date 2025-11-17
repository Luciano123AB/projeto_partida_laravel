<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected = [
        "usuario",
        "idade"
    ];
    
    public function notas() {
        return $this->hasMany(Nota::class);
    }
}
