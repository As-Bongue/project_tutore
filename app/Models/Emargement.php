<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Emargement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function anne() : BelongsTo
    {
        return $this->belongsTo(Anne::class);
    }

    public function reglement() : BelongsTo
    {
        return $this->belongsTo(Reglement::class);
    }

    public function matiere() : BelongsTo
    {
        return $this->belongsTo(Matiere::class);
    }

}
