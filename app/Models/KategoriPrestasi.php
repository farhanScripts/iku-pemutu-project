<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriPrestasi extends Model
{
    protected $guarded = ["id"];

    public function prestasi(): HasMany
    {
        return $this->hasMany(Prestasi::class);
    }
}
