<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestasi extends Model
{
    protected $guarded = ['id'];

    public function kategoriPrestasi(): HasMany {
        return $this->hasMany(KategoriPrestasi::class);
    }

    public function tingkatPrestasi(): HasMany {
        return $this->hasMany(TingkatPrestasi::class);
    }

    public function mahasiswa():BelongsTo { 
        return $this->belongsTo(Mahasiswa::class);
    }
}
