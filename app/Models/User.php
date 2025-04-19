<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // relation entre role et user
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    // fonction pour savoir si un utilisateur a un role
    public function hasRole(string $role): bool
    {
        return $this->roles()->where('nom', $role)->exists();
    }

    // fonction pour rediriger l'utilisateur en fonction de son role
    public function redirectTo(): string
    {
        return $this->hasRole('admin')
        ? route('admin.dashboard')
        : route('client.dashboard');
    }
    // relation entre user et annonce
    public function annonces(): HasMany
    {
        return $this->hasMany(Annonce::class);
    }

    // relation entre user et commentaire
    public function commentaires(): HasMany
    {
        return $this->hasMany(Commentaire::class);
    }
}
