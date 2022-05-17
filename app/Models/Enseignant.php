<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enseignant extends Model
{
    use HasFactory;

    protected $table = 'enseignants';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $guarded = [];

    public function matieres() : HasMany
    {
        return $this->hasMany(Matiere::class, 'enseignant_code');
    }

}
