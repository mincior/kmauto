<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class MonthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->generate();
    }

    /**
     
     * 
     * @return void     
     */
    private function generate()
    {
        $users = Month::factory()->state(
            new Sequence(
                [
                    'id' => 1, 'data_raportarii' => '2022-12-01', 'anul_luna' => 'noiembrie 2022', 'select' => 0, 'inchisa' => 1,
                ],

                [
                    'id' => 2, 'data_raportarii' => '2023-01-01', 'anul_luna' => 'decembrie 2022','select' => 0, 'inchisa' => 1,
                ],

                [
                    'id' => 3, 'data_raportarii' => '2023-02-01', 'anul_luna' => 'ianuarie 2023','select' => 0, 'inchisa' => 1,
                ],

                [
                    'id' => 4, 'data_raportarii' => '2023-03-01', 'anul_luna' => 'februarie 2023','select' => 0, 'inchisa' => 1,
                ],

                [
                    'id' => 5, 'data_raportarii' => '2023-04-01', 'anul_luna' => 'martie 2023','select' => 0,'inchisa' => 1,
                ],

                [
                    'id' => 6, 'data_raportarii' => '2023-05-01', 'anul_luna' => 'aprilie 2023','select' => 1,'inchisa' => 0,
                ],

            )
        )->count(6)->create();
    }
}
