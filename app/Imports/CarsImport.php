<?php

namespace App\Imports;

use App\Models\Car;
use Maatwebsite\Excel\Concerns\ToModel;

class CarsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        dd($row);
        return new Car
        ([
            'name' => $row[1],
            'email' => $row[8],
            'limita_km' => $row[4],
            'observatii' => $row[11],
            'telefon' => $row[12],
        ]);
    }
}
