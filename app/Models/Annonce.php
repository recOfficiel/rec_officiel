<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'slug',
        'contenu',
        'image',
        'user_id',
        'categorie_id',
    ];

public function getRouteKeyName(): string
    {
        return 'slug';
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
