<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Moi extends Model
{
    use HasFactory;

    protected $fillable = ['libele'];

    public function annees() : BelongsToMany
    {
        return $this->BelongsToMany(Annee::class , 'annee_moi', 'annees_id', 'mois_id');
    }

    public function emargements() : HasMany
    {
        return $this->hasMany(Emargement::class);
    }
}
