<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fakultas extends Model
{
    protected $guarded = ['id'];

    public function prodi():HasMany {
        return $this->hasMany(Prodi::class);
    }
}
