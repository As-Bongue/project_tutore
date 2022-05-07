<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specialite extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function filiere() : BelongsTo
    {
        return $this->belongsTo(Filiere::class);
    }

    public function matieres() : BelongsToMany
    {
        return $this->belongsToMany(Matiere::class);
    }

    public function niveaux() : BelongsToMany
    {
        return $this->belongsToMany(Niveau::class);
    }
}
