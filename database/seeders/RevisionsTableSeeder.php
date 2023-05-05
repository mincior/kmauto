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
                    'km' => -1,
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
            )
        )->count(25)->create();
    }
}
