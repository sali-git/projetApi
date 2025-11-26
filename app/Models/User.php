<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// ⚠️ IMPORTANT : Importer l'interface JWTSubject
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * Attributs assignables en masse (fillable)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Attributs cachés dans les réponses JSON
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts automatiques (Laravel 11+)
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ==========================================
    // ⚠️ MÉTHODES OBLIGATOIRES POUR JWT
    // ==========================================

    /**
     * Identifiant stocké dans le token JWT
     */
    public function getJWTIdentifier()
    {
        return $this->getKey(); // Retourne l'ID de l'utilisateur
    }

    /**
     * Claims personnalisés à ajouter dans le token JWT
     */
    public function getJWTCustomClaims()
    {
        return [];
        // Exemple :
        // return [
        //     'role' => $this->role,
        // ];
    }
}
