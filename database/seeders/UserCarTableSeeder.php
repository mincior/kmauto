<?php

namespace Database\Seeders;

use App\Models\UserCar;
use App\Models\CarDep;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserCarTableSeeder extends Seeder
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
        $users = UserCar::factory()->state(
            new Sequence(
                [
                    'car_id' => 134,
                    'user_id' => 5,
                    'interval_id' => 1,
                ],
                [
                    'car_id' => 73,
                    'user_id' => 17,
                    'interval_id' => 1,
                ],
                [
                    'car_id' => 59,
                    'user_id' => 121,
                    'interval_id' => 1,
                ],
                [
                    'car_id' => 46,
                    'user_id' => 48,
                    'interval_id' => 1,
                ],
                [
                    'car_id' => 44,
                    'user_id' => 55,
                    'interval_id' => 1,
                ],
                [
                    'car_id' => 1,
                    'user_id' => 1,
                    'interval_id' => 1,
                ],
            )
        )->count(6)->create();
    }
}
