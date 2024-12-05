<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    protected $guarded = ["id"];

    public function dosen(): HasMany
    {
        return $this->hasMany(Prodi::class);
    }

    public function akreditasiProdi(): HasMany {
        return $this->hasMany(AkreditasiProdi::class);
    }

    public function fakultas():BelongsTo {
        return $this->belongsTo(Fakultas::class);
    }
}
