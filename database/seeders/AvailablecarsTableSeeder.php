<?php

namespace Database\Seeders;

use App\Models\Availablecar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class AvailablecarsTableSeeder extends Seeder
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
        $availablecars = Availablecar::factory()->state(
            new Sequence(
                [
                    'valoare' => 1,
                    'car_id' => 1,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 2,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 3,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 4,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 5,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 6,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 7,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 8,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 9,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 10,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 11,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 12,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 13,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 14,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 15,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 16,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 17,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 18,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 19,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 20,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 21,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 22,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 23,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 24,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 25,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 26,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 27,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 28,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 29,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 30,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 31,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 32,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 33,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 34,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 35,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 36,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 37,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 38,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 39,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 40,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 41,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 42,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 43,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 44,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 45,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 46,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 47,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 48,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 49,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 50,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 51,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 52,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 53,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 54,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 55,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 56,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 57,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 58,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 59,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 60,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 61,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 62,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 63,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 64,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 65,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 66,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 67,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 68,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 69,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 70,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 71,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 72,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 73,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 74,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 75,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 76,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 77,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 78,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 79,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 80,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 81,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 82,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 83,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 84,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 85,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 86,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 87,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 88,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 89,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 90,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 91,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 92,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 93,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 94,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 95,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 96,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 97,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 98,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 99,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 100,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 101,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 102,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 103,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 104,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 105,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 106,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 107,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 108,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 109,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 110,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 111,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 112,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 113,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 114,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 115,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 116,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 117,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 118,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 119,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 120,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 121,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 122,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 123,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 124,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 125,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 126,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 127,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 128,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 129,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 130,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 131,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 132,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 133,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 134,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 135,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 136,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 137,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 138,
                    'interval_id' => 1,
                ],

            )
        )->count(138)->create();
    }
}
