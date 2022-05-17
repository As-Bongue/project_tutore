<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Matiere extends Model
{
    use HasFactory;

    protected $table = 'matieres';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $guarded = [];

    public function enseignant() : BelongsTo
    {
        return $this->belongsTo(Enseignant::class);
    }

    public function niveau() : BelongsTo
    {
        return $this->belongsTo(Niveau::class);
    }

    public function emargements() : HasMany
    {
        return $this->hasMany(Emargement::class, 'matiere_code');
    }

    public function specialites() : BelongsToMany
    {
        return $this->belongsToMany(Specialite::class, 'matiere_specialite', 'matiere_code', 'specialite_code');
    }
}
