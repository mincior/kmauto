<?php

namespace Database\Seeders;

use App\Models\Kmlog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class KmlogsTableSeeder extends Seeder
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
     * Inserts in DB kmlogs that are harcoded.
     * 
     * @return void     
     */
    private function generate()
    {
        $kmlogs = KmLog::factory()->state(
            new Sequence(
                [
                    'car_id' => 3,
                    'id' => 7,
                    'km' => 777,
                    'department_id' => 3,
                    'user_id' => 3,
                    'interval_id' => 23,
                    'picture' => 'Adauga aici o poza',
                    'observatii' => 'Nu sunt',
                    'ordine' => 6,
                    'stat_id' => 1,
                ],
                [
                    'car_id' => 4,
                    'id' => 8,
                    'km' => 3334,
                    'department_id' => 4,
                    'user_id' => 4,
                    'interval_id' => 23,
                    'picture' => 'Adauga aici o poza',
                    'observatii' => 'Nu sunt',
                    'ordine' => 5,
                    'stat_id' => 2,
                ],
                [
                    'car_id' => 4,
                    'id' => 9,
                    'km' => 667,
                    'department_id' => 4,
                    'user_id' => 4,
                    'interval_id' => 23,
                    'picture' => 'Adauga aici o poza',
                    'observatii' => 'Nu sunt',
                    'ordine' => 1,
                    'stat_id' => 1,
                ],
                [
                    'car_id' => 7,
                    'id' => 10,
                    'km' => 23,
                    'department_id' => 7,
                    'user_id' => 7,
                    'interval_id' => 6,
                    'picture' => 'Adauga aici o poza',
                    'observatii' => 'Nu sunt',
                    'ordine' => 3,
                    'stat_id' => 2,
                ],
                [
                    'car_id' => 3,
                    'id' => 11,
                    'km' => 2345,
                    'department_id' => 3,
                    'user_id' => 3,
                    'interval_id' => 23,
                    'picture' => 'Adauga aici o poza',
                    'observatii' => 'Nu sunt',
                    'ordine' => 2,
                    'stat_id' => 2,
                ],
                [
                    'car_id' => 3,
                    'id' => 12,
                    'km' => 334,
                    'department_id' => 3,
                    'user_id' => 3,
                    'interval_id' => 24,
                    'picture' => 'Adauga aici o poza',
                    'observatii' => 'Nu sunt',
                    'ordine' => 1,
                    'stat_id' => 2,
                ],

            )
        )->count(6)->create();
    }
}
