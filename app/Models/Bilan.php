<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bilan extends Model
{
    use HasFactory;

    public function annee_academique() : BelongsTo
    {
        return $this->belongsTo(Annee_academique::class);
    }
}
