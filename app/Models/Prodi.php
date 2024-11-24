<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function akreditasiProdi(): HasMany {
        return $this->hasMany(AkreditasiProdi::class);
    }

    public function fakultas():BelongsTo {
        return $this->belongsTo(Fakultas::class);
    }
}
