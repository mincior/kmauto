<?php

namespace App\Imports;

use App\Models\Car;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CarsImportToModel implements ToModel, WithHeadingRow
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
            'id' => $row['Car id'],
            'numar' => $row['Numar'],
            'fuel_id' => $row['Combustibil id'],
            'type_id' => $row['Model id'],
            'brand_id' => $row['Marca id'],
        ]);

    }

    // /**
    //  * @return int
    //  */
    // public function startRow(): int
    // {
    //     return 2;
    // }
}
