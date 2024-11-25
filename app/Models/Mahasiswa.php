<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function prestasi():HasMany {
        return $this->hasMany(Prestasi::class);
    }

    public function prodi():HasOne {
        return $this->hasOne(Prodi::class);
    }
}
