<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dosen extends Model
{
    protected $guarded = ['id'];

    public function jabatan(): HasOne {
        return $this->hasOne(Dosen::class);
    }

    public function prodi(): HasMany {
        return $this->hasMany(Prodi::class);
    }

    public function pekerjaan(): HasOne {
        return $this->hasOne(pekerjaan::class);
    }
}
