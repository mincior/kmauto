<?php

namespace App\Imports;

use App\Models\Car;
use App\Models\Expire;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
//use Maatwebsite\Excel\Concerns\WithStartRow;

class ExpiresImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

   public function model(array $row)
    {
        //WithHeadingRow va pune primul rand ca si chei in format snake_case(laravel str_slug function)
        //Daca vrem sa nu fie formatat headerul vom pune HeadingRowFormatter::default('none') in config/excel.php;
        //Este posibil ca headerul sa fie pe un alt rand caz in care se va scrie functia headingRow
        return new Expire
        ([
            'id' => $row['Car id'],
            'casco' => $row['CASCO'],
            'rca' => $row['RCA'],
            'rovinieta' => $row['Rovinieta'],
            'itp' => $row['ITP'],
            'final_leasing' => $row['Data final LEASING'],
            'car_id' => $row['Car id'],
        ]);

    }

    // /**
    //  * @return int
    //  */
    // public function startRow(): int
    // {
    //     return 8;//pleaca cu datele de la randul 8
    // }

    // /**
    //  * @return int
    //  */
    // public function headingRow(): int
    // {
    //     return 4;//aici randul pe care se afla headerul este 4
    // }

    
}
