<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    use SoftDeletes;

    const UPDATED_AT = null;

    protected $fillable = [
        "titulo",
        "texto",
        "user_id"
    ];

    protected $casts = [
        "titulo" => "string",
        "texto" => "string",
        "user_id" => "integer"
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
