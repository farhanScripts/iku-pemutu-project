<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KategoriPrestasi extends Model
{
    protected $guarded = ["id"];

    public function prestasi(): BelongsTo
    {
        return $this->belongsTo(Prestasi::class);
    }
}
