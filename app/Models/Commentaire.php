<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'contenu',
    ];

    // relation avec l'utilisateur
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // relation avec l'annonce
    public function annonce(): BelongsTo
    {
        return $this->belongsTo(Annonce::class);
    }
}
