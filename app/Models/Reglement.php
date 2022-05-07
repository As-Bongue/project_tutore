<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reglement extends Model
{
    use HasFactory;

    protected $guard = [];

    public function emargements() : HasMany
    {
        return $this->hasMany(Emargement::class);
    }

    public function niveau() : BelongsTo
    {
        return $this->belongsTo(Niveau::class);
    }
}
