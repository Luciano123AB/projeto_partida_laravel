<?php

namespace App\Models;

use App\Notifications\EmailConfirmation;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory,
        Notifiable,
        MustVerifyEmailTrait,
        SoftDeletes;

    const UPDATED_AT = null;

    protected $fillable = [
        "name",
        "email",
        "email_verified_at",
        "password",
        "remember_token",
        "role",
        "status"
    ];

    protected $casts = [
        "name" => "string",
        "email" => "string",
        "email_verified_at" => "datetime",
        "password" => "string",
        "remember_token" => "string",
        "role" => "string",
        "status" => "string"
    ];

    public function notas(): HasMany {
        return $this->hasMany(Note::class);
    }

    public function sendEmailVerificationNotification() {
        $this->notify(new EmailConfirmation);
    }
}