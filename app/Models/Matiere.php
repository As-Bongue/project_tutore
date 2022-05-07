<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matiere extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function enseignant() : BelongsTo
    {
        return $this->belongsTo(Enseignant::class);
    }

    public function emargements() : HasMany
    {
        return $this->hasMany(Emargement::class);
    }

    public function specialites() : BelongsToMany
    {
        return $this->belongsToMany(Specialite::class);
    }
}
