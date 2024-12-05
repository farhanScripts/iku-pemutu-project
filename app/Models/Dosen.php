<?php

namespace App\Models;

use App\Models\IKU3\DsnPenelitianLuarPt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dosen extends Model
{
    protected $guarded = ['id'];

    public function jabatan(): HasOne {
        return $this->hasOne(Dosen::class);
    }

    public function prodi(): BelongsTo {
        return $this->belongsTo(Prodi::class);
    }

    public function pekerjaan(): HasOne {
        return $this->hasOne(pekerjaan::class);
    }

    public function dsnPenelitianLuarPt(): HasMany {
        return $this->hasMany(DsnPenelitianLuarPt::class, 'dosen_id', 'id');
    }
}
