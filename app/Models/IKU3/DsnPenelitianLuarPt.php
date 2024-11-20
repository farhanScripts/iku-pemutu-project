<?php

namespace App\Models\IKU3;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DsnPenelitianLuarPt extends Model
{
    protected $table = "dsn_penelitian_luar_pt";

    protected $primaryKey = "id_dsn_penelitian";

    protected $guarded = ['id'];

    public function dosen(): BelongsTo {
        return $this->belongsTo(Dosen::class);
    }
}
