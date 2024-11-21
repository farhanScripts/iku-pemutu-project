<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestasi extends Model
{
    protected $guarded = ['id'];

    public function kategoriPrestasi(): BelongsTo {
        return $this->belongsTo(KategoriPrestasi::class);
    }

    public function tingkatPrestasi(): BelongsTo {
        return $this->belongsTo(TingkatPrestasi::class);
    }

    public function mahasiswa():BelongsTo {
        return $this->belongsTo(Mahasiswa::class);
    }
}
