<?php

namespace App\Imports;

use App\Models\IKU3\DsnPenelitianLuarPt;
use Maatwebsite\Excel\Concerns\ToModel;

class DsnPenelitianImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DsnPenelitianLuarPt([
            'thn_ajar' => $row[0],
            'dosen_id' => $row[1],
            'tahun_kegiatan' => $row[2],
            'lembaga_iptek' => $row[3],
            'jenis' => $row[4],
            'judul' => $row[5],
            'bobot' => $row[6],
        ]);
    }
}
