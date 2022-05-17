<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Annee_academique extends Model
{
    use HasFactory;

    protected $fillable = ['libele'];

    public function mois() : HasMany
    {
        return $this->hasMany(Moi::class);
    }

    public function bilans() : HasMany
    {
        return $this->hasMany(Bilan::class);
    }
}
