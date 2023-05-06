<?php

namespace App\Imports;

use App\Models\Car;
use App\Models\Carsecond;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CarsecondsImport implements ToCollection, WithHeadingRow
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
                'nr_identificare' => $row['Nr. identificare'],
                'caroseria' => $row['Caroseria'],
                'are_gps' => $row['Are GPS?'] ? $row['Are GPS?'] : null,
                'recep_auto' => $row['Data receptionare AUTO'] ? $row['Data receptionare AUTO'] : null,
                'an_fabr' => $row['An fabricatie'] ? $row['An fabricatie'] :  null,
                'poluare' => $row['Poluare'] ?  $row['Poluare'] : null,
                'p_kw' => $row['P(kw)'],
                'mtma' => $row['MTMA'],
                'cap_cyl' => $row['Cap. cil.'],
                'cap_rez' => $row['Cap.rez.'],
                'auto_inloc' => $row['Auto de inlocuire'],
                'km_contract' => $row['Km contract'],
                'car_id' => $row['Car id'],
                'frame_id' => $row['Frame id'],
            ];
            $seed = $seed . "[\n";
            foreach($arr_import as $key=>$value){
                $seed = $seed . "\t" . "'" . $key . "' => '" . $value . "', " ;
            }
            $seed = $seed . "\n],\n";
            Carsecond::create($arr_import);
        }
        $succes = file_put_contents(base_path('/database/seeders/CarsecondImportSeeder.txt'), $seed);
        dd($succes, $seed) ;
    }

    // /**
    //  * @return int
    //  */
    // public function startRow(): int
    // {
    //     return 2;
    // }
}
