<?php

namespace App\Imports;

use App\Models\Car;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CarsImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Car
        ([
            'id' => $row[0],
            'numar' => $row[1],
            'fuel_id' => $row[3],
            'type_id' => $row[9],
            'brand_id' => $row[7],
        ]);

    }
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
}
