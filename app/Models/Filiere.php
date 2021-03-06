<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Filiere extends Model
{
    use HasFactory;

    protected $table = 'filieres';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $guarded = [];

    public function specialites() : HasMany
    {
        return $this->hasMany(Specialite::class, 'filiere_code');
    }
}
