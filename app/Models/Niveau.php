<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = ['intitule'];

    public function specialites() : BelongsToMany
    {
        return $this->belongsToMany(Specialite::class);
    }
}
