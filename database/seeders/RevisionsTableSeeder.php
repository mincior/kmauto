<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Revision;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class RevisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy customers
        $this->generate();
    }

    /**
     
     * 
     * @return void     
     */
    private function generate()
    {
        $revisions = Revision::factory()->state(
            new Sequence(
                [
                    'id' => 1,
                    'car_id' => 1,
                    'data' => '2020-05-04',
                    'km' => 120295,
                ],
                [
                    'id' => 2,
                    'car_id' => 2,
                    'data' => '2021-04-28',
                    'km' => 298000,
                ],
                [
                    'id' => 3,
                    'car_id' => 3,
                    'data' => '2021-09-06',
                    'km' => 236091,
                ],
                [
                    'id' => 4,
                    'car_id' => 8,
                    'data' => '2020-01-27',
                    'km' => 119014,
                ],
                [
                    'id' => 5,
                    'car_id' => 9,
                    'data' => '2019-06-12',
                    'km' => 63468,
                ],
                [
                    'id' => 6,
                    'car_id' => 10,
                    'data' => '2020-03-06',
                    'km' => 152379,
                ],
                [
                    'id' => 7,
                    'car_id' => 12,
                    'data' => '2021-08-17',
                    'km' => 109103,
                ],
                [
                    'id' => 8,
                    'car_id' => 13,
                    'data' => '2021-06-03',
                    'km' => 134802,
                ],
                [
                    'id' => 9,
                    'car_id' => 17,
                    'data' => '2021-05-18',
                    'km' => 112414,
                ],
                [
                    'id' => 10,
                    'car_id' => 18,
                    'data' => '2018-10-08',
                    'km' => 30528,
                ],
                [
                    'id' => 11,
                    'car_id' => 19,
                    'data' => '2021-08-12',
                    'km' => 275329,
                ],
                [
                    'id' => 12,
                    'car_id' => 20,
                    'data' => '2021-06-16',
                    'km' => 80554,
                ],
                [
                    'id' => 13,
                    'car_id' => 22,
                    'data' => '2021-05-25',
                    'km' => 39278,
                ],
                [
                    'id' => 14,
                    'car_id' => 23,
                    'data' => '2021-06-14',
                    'km' => 25541,
                ],
                [
                    'id' => 15,
                    'car_id' => 24,
                    'data' => '2021-08-30',
                    'km' => 125179,
                ],
                [
                    'id' => 16,
                    'car_id' => 31,
                    'data' => '2021-06-22',
                    'km' => 52377,
                ],
                [
                    'id' => 17,
                    'car_id' => 48,
                    'data' => '2019-04-23',
                    'km' => 0,
                ],
                [
                    'id' => 18,
                    'car_id' => 65,
                    'data' => '2020-06-04',
                    'km' => 63749,
                ],
                [
                    'id' => 19,
                    'car_id' => 78,
                    'data' => '2020-07-02',
                    'km' => 156821,
                ],
                [
                    'id' => 20,
                    'car_id' => 80,
                    'data' => '2021-02-04',
                    'km' => 24120,
                ],
                [
                    'id' => 21,
                    'car_id' => 111,
                    'data' => '2019-05-16',
                    'km' => 44978,
                ],
                [
                    'id' => 22,
                    'car_id' => 123,
                    'data' => '2020-04-13',
                    'km' => 47034,
                ],
                [
                    'id' => 23,
                    'car_id' => 129,
                    'data' => '2021-09-14',
                    'km' => 118677,
                ],
                [
                    'id' => 24,
                    'car_id' => 138,
                    'data' => '2021-05-10',
                    'km' => 153101,
                ],
                [
                    'id' => 25,
                    'car_id' => 29,
                    'data' => '2021-06-22',
                    'km' => 52377,
                ],
                [
                    'id' => 26,
                    'car_id' => 140,
                    'data' => '2018-08-27',
                    'km' => 143437,
                ],
                [
                    'id' => 27,
                    'car_id' => 143,
                    'data' => '2019-01-15',
                    'km' => 172064,
                ],
                [
                    'id' => 28,
                    'car_id' => 146,
                    'data' => '2019-09-24',
                    'km' => 200727,
                ],
                [
                    'id' => 29,
                    'car_id' => 148,
                    'data' => '2020-03-02',
                    'km' => 0,
                ],
                [
                    'id' => 30,
                    'car_id' => 149,
                    'data' => '2019-12-13',
                    'km' => 96984,
                ],
                [
                    'id' => 31,
                    'car_id' => 150,
                    'data' => '2020-07-29',
                    'km' => 231891,
                ],
                [
                    'id' => 32,
                    'car_id' => 153,
                    'data' => '2019-12-03',
                    'km' => 113998,
                ],
                [
                    'id' => 33,
                    'car_id' => 156,
                    'data' => '2019-07-11',
                    'km' => 105765,
                ],
                [
                    'id' => 34,
                    'car_id' => 157,
                    'data' => '2020-03-16',
                    'km' => 52858,
                ],
                [
                    'id' => 35,
                    'car_id' => 158,
                    'data' => '2021-06-06',
                    'km' => 86132,
                ],
                [
                    'id' => 36,
                    'car_id' => 159,
                    'data' => '2019-07-10',
                    'km' => 145398,
                ],
                [
                    'id' => 37,
                    'car_id' => 163,
                    'data' => '2021-04-20',
                    'km' => 137333,
                ],
                [
                    'id' => 38,
                    'car_id' => 164,
                    'data' => '2019-08-05',
                    'km' => 143600,
                ],
                [
                    'id' => 39,
                    'car_id' => 165,
                    'data' => '2020-07-29',
                    'km' => 168805,
                ],
                [
                    'id' => 40,
                    'car_id' => 166,
                    'data' => '2019-10-08',
                    'km' => 42373,
                ],
                [
                    'id' => 41,
                    'car_id' => 181,
                    'data' => '2020-08-24',
                    'km' => 97780,
                ],
            )
        )->count(41)->create();
    }
}
