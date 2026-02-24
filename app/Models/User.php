<?php

namespace App\Models;

use App\Notifications\VerificacaoEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,
        MustVerifyEmailTrait,
        SoftDeletes;
        
    const UPDATED_AT = null;
    
    protected $fillable = [
        "name",
        "email",
        "password",
        "remember_token",
        "data_nascimento",
        "foto",
        "permissao",
        "ultimo_acesso",
        "email_verified_at"
    ];

    protected $casts = [
        "name" => "string",
        "email" => "string",
        "password" => "string",
        "remember_token" => "string",
        "data_nascimento" => "date",
        "foto" => "string",
        "permissao" => "boolean",
        "ultimo_acesso" => "datetime",
        "email_verified_at" => "datetime"
    ];
    
    public function notas(): HasMany {
        return $this->hasMany(Nota::class);
    }

    public function sendEmailVerificationNotification() {
        $this->notify(new VerificacaoEmail);
    }
}
