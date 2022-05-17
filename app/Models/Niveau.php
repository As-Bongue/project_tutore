<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = ['intitule'];

    public function matires() : HasMany
    {
        return $this->hasMany(Matiere::class);
    }

    public function cycle() : BelongsTo
    {
        return $this->belongsTo(Cycle::class);
    }
}
