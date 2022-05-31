<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Annee extends Model
{
    use HasFactory;

    protected $fillable = ['libele'];

    public function mois() : BelongsToMany
    {
        return $this->BelongsToMany(Moi::class, 'annee_moi', 'annees_id', 'mois_id');
    }

    public function bilans() : HasMany
    {
        return $this->hasMany(Bilan::class);
    }
}
