<?php

namespace App\Imports;

use App\Models\Car;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//use Maatwebsite\Excel\Concerns\WithStartRow;

class ExpiresImport implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

   public function collection(Collection $rows)
    {
        //WithHeadingRow va pune primul rand ca si chei in format snake_case(laravel str_slug function)
        //Daca vrem sa nu fie formatat headerul vom pune HeadingRowFormatter::default('none') in config/excel.php;
        //Este posibil ca headerul sa fie pe un alt rand caz in care se va scrie functia headingRow
        $seed = "";
        foreach ($rows as $row) {
            $arr_import = [
                'id' => $row['Car id'],
                'casco' => $row['CASCO'],
                'rca' => $row['RCA'],
                'rovinieta' => $row['Rovinieta'],
                'itp' => $row['ITP'],
                'final_leasing' => $row['Data final LEASING'],
                'car_id' => $row['Car id'],
                ];
            $seed = $seed . "[\n";
            foreach($arr_import as $key=>$value){
                $seed = $seed . "\t" . "'" . $key . "' => '" . $value . "', " ;
            }
            $seed = $seed . "\n],\n";
            Car::create($arr_import);
        }
        file_put_contents(base_path('/database/seeders/ExpiresImportSeeder - '.count($rows).'.txt'), stripslashes($seed));

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
