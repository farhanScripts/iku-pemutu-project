<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AkreditasiProdi extends Model
{
    protected $guarded = ['id'];

    public function prodi():BelongsTo  {
        return $this->belongsTo(Prodi::class);
    }

    public function jenjang():HasMany {
        return $this->hasMany(Jenjang::class);
    }
}
