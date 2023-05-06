<?php

namespace App\Imports;

use App\Models\CarStat;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CarStatsImport implements ToCollection, WithHeadingRow
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
                'observatii' => 'Nu sunt',
                'interval_id' => 1,
                'car_id' => $row['Car id'],
                'car_stat_value_id' => $row['Status id'],
            ];
            $seed = $seed . "[\n";
            foreach($arr_import as $key=>$value){
                $seed = $seed . "\t" . "'" . $key . "' => '" . $value . "', " ;
            }
            $seed = $seed . "\n],\n";
            CarStat::create($arr_import);
        }
        file_put_contents(base_path('/database/seeders/CarStatsImportSeeder.txt'), stripslashes($seed));
    }

    // /**
    //  * @return int
    //  */
    // public function startRow(): int
    // {
    //     return 2;
    // }
}
