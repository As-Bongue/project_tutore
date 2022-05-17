<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Emargement extends Model
{
    use HasFactory;

    protected $fillable = ['heure_debut', 'heure_fin'];

    public function matiere() : BelongsTo
    {
        return $this->belongsTo(Matiere::class);
    }

    public function moi() : BelongsTo
    {
        return $this->belongsTo(Moi::class);
    }
}
