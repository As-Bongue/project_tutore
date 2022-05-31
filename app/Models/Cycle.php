<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cycle extends Model
{
    use HasFactory;

    protected $table = 'cycles';

    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $guarded = [];

    public function niveaux() : HasMany
    {
        return $this->hasMany(Niveau::class, 'cycle_code');
    }
}
