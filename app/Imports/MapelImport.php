<?php

namespace App\Imports;

use App\Models\Mapel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MapelImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mapel([
            'nama_mapel' => $row['nama_mapel'],
        ]);
    }
}
