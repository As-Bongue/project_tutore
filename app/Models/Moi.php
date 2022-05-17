<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Moi extends Model
{
    use HasFactory;

    protected $fillable = ['libele'];

    public function annee_academique() : BelongsTo
    {
        return $this->belongsTo(Annee_academique::class);
    }

    public function emargements() : HasMany
    {
        return $this->hasMany(Emargement::class);
    }
}
