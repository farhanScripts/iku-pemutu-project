<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jenjang extends Model
{
    protected $guarded = ['id'];

    public function akreditasiProdi():BelongsTo {
        return $this->belongsTo(AkreditasiProdi::class);
    }
}
