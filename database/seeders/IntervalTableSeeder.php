<?php

namespace Database\Seeders;

use App\Models\Interval;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class IntervalTableSeeder extends Seeder
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
     * Inserts in DB users that are harcoded.
     * 
     * @return void     
     */
    private function generate()
    {
        $users = Interval::factory()->state(
            new Sequence(
                [
                    'id' => 1, 'month_id' => 1, 'data_inceput' => '2022-11-04', 'data_sfarsit' => '2022-11-07', 'interval' => '04 - 07.11', 'select' => 1,
                ],

                [
                    'id' => 2, 'month_id' => 1, 'data_inceput' => '2022-11-11', 'data_sfarsit' => '2022-11-14', 'interval' => '11 - 14.11', 'select' => 0,
                ],

                [
                    'id' => 3, 'month_id' => 1, 'data_inceput' => '2022-11-18', 'data_sfarsit' => '2022-11-21', 'interval' => '18 - 21.11', 'select' => 0,
                ],

                [
                    'id' => 4, 'month_id' => 1, 'data_inceput' => '2022-11-25', 'data_sfarsit' => '2022-11-28', 'interval' => '25 - 28.11', 'select' => 0,
                ],

                [
                    'id' => 5, 'month_id' => 2, 'data_inceput' => '2022-11-29', 'data_sfarsit' => '2022-12-05', 'interval' => '29.11 - 05.12', 'select' => 1,
                ],

                [
                    'id' => 6, 'month_id' => 2, 'data_inceput' => '2022-12-09', 'data_sfarsit' => '2022-12-12', 'interval' => '09 - 12.12', 'select' => 0,
                ],

                [
                    'id' => 7, 'month_id' => 2, 'data_inceput' => '2022-12-16', 'data_sfarsit' => '2022-12-19', 'interval' => '16 - 19.12', 'select' => 0,
                ],

                [
                    'id' => 8, 'month_id' => 2, 'data_inceput' => '2022-12-23', 'data_sfarsit' => '2023-01-03', 'interval' => '23.12 - 03.01', 'select' => 0,
                ],
                [
                    'id' => 9, 'month_id' => 3, 'data_inceput' => '2023-01-06', 'data_sfarsit' => '2023-01-09', 'interval' => '06 - 09.01', 'select' => 1,
                ],

                [
                    'id' => 10, 'month_id' => 3, 'data_inceput' => '2023-01-13', 'data_sfarsit' => '2023-01-16', 'interval' => '13 - 16.01', 'select' => 0,
                ],

                [
                    'id' => 11, 'month_id' => 3, 'data_inceput' => '2023-01-20', 'data_sfarsit' => '2023-01-23', 'interval' => '20 - 23.01', 'select' => 0,
                ],

                [
                    'id' => 12, 'month_id' => 3, 'data_inceput' => '2023-01-27', 'data_sfarsit' => '2023-01-30', 'interval' => '27 - 30.01', 'select' => 0,
                ],

                [
                    'id' => 13, 'month_id' => 4, 'data_inceput' => '2023-02-03', 'data_sfarsit' => '2023-02-06', 'interval' => '03 - 06.02', 'select' => 1,
                ],

                [
                    'id' => 14, 'month_id' => 4, 'data_inceput' => '2023-02-10', 'data_sfarsit' => '2023-02-13', 'interval' => '10 - 13.02', 'select' => 0,
                ],

                [
                    'id' => 15, 'month_id' => 4, 'data_inceput' => '2023-02-17', 'data_sfarsit' => '2023-02-20', 'interval' => '17 - 20.02', 'select' => 0,
                ],

                [
                    'id' => 16, 'month_id' => 4, 'data_inceput' => '2023-02-24', 'data_sfarsit' => '2023-02-27', 'interval' => '24 - 27.02', 'select' => 0,
                ],

                [
                    'id' => 17, 'month_id' => 5, 'data_inceput' => '2023-03-03', 'data_sfarsit' => '2023-03-06', 'interval' => '03 - 06.03', 'select' => 1,
                ],

                [
                    'id' => 18, 'month_id' => 5, 'data_inceput' => '2023-03-10', 'data_sfarsit' => '2023-03-13', 'interval' => '10 - 13.03', 'select' => 0,
                ],

                [
                    'id' => 19, 'month_id' => 5, 'data_inceput' => '2023-03-17', 'data_sfarsit' => '2023-03-20', 'interval' => '17 - 20.03', 'select' => 0,
                ],

                [
                    'id' => 20, 'month_id' => 5, 'data_inceput' => '2023-03-24', 'data_sfarsit' => '2023-03-27', 'interval' => '24 - 27.03', 'select' => 0, 
                ],

            )
        )->count(20)->create();
    }
}
