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
                    'id' => 1, 'observatii' => '', 'user_id' => 1, 'car_id' => 1,
                ],
                
                [
                    'id' => 2, 'observatii' => '', 'user_id' => 2, 'car_id' => 2,
                ],
                
                
                
                                
                                                
            )            
        )->count(2)->create();
        
                

    }

}
