<?php

namespace App\Imports;

use App\Models\Carsecond;
use Maatwebsite\Excel\Concerns\ToModel;

class CarsecondsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Carsecond([
            'name' => $row[1],
            'email' => $row[8],
            'limita_km' => $row[4],
            'observatii' => $row[11],
            'telefon' => $row[12],
        ]);
    }
}
