<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specialite extends Model
{
    use HasFactory;

    protected $table = 'specialites';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $guarded = [];

    public function filiere() : BelongsTo
    {
        return $this->belongsTo(Filiere::class);
    }

    public function matieres() : BelongsToMany
    {
        return $this->belongsToMany(Matiere::class, 'matiere_specialite', 'matiere_code', 'specialite_code');
    }
}
