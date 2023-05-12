<?php

namespace App\Imports;

use App\Models\Car;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CarsImport implements ToCollection, WithHeadingRow
{
    /**
     * Undocumented function
     *
     * @param Collection $rows
     * @return void
     */

    public function collection(Collection $rows)
    {
        $seed = "";
        foreach ($rows as $row) {
            $arr_import = [
                'id' => $row['Car id'],
                'numar' => $row['Numar'],
                'fuel_id' => $row['Combustibil id'],
                'type_id' => $row['Model id'],
                'brand_id' => $row['Marca id'],
            ];
            $seed = $seed . "[\n";
            foreach($arr_import as $key=>$value){
                $seed = $seed . "\t" . "'" . $key . "' => '" . $value . "', " ;
            }
            $seed = $seed . "\n],\n";
            //Car::create($arr_import); //debifeaza aici daca vrei sa scrie in baza de date. Altfel creaza doar fisierul pentru seed
            //care se va scrie cu copiere si lipire in fisierul seed adevarat. 
        }
        if($seed){//atentie. scrierea dureaza ceva. Nu va grabiti sa dati alta scriere
            file_put_contents(base_path('/database/seeders/CarsImportSeeder.txt'), stripslashes($seed));
        }
    }

    // /**
    //  * @return int
    //  */
    // public function startRow(): int
    // {
    //     return 2;
    // }
}
