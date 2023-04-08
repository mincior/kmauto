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
                    'id' => 1, 'observatii' => 'plecat de la noi', 'user_id' => 1, 'car_id' => 140, 'interval_id' => 1,
                ],
                
                [
                    'id' => 2, 'observatii' => 'rau platnic', 'user_id' => 2, 'car_id' => 143, 'interval_id' => 1,
                ],
                
                [
                    'id' => 3, 'observatii' => 'greu de cap', 'user_id' => 4, 'car_id' => 142, 'interval_id' => 1,
                ],
                
                [
                    'id' => 4, 'observatii' => '', 'user_id' => 3, 'car_id' => 141, 'interval_id' => 1,
                ],
                
                [
                    'id' => 5, 'observatii' => '', 'user_id' => 5, 'car_id' => 139, 'interval_id' => 1,
                ],
                
                [
                    'id' => 6, 'observatii' => '', 'user_id' => 6, 'car_id' => 138, 'interval_id' => 1,
                ],
                
                [
                    'id' => 7, 'observatii' => '', 'user_id' => 7, 'car_id' => 137, 'interval_id' => 1,
                ],
                
                [
                    'id' => 8, 'observatii' => '', 'user_id' => 8, 'car_id' => 136, 'interval_id' => 1,
                ],
                
                [
                    'id' => 9, 'observatii' => '', 'user_id' => 9, 'car_id' => 135, 'interval_id' => 1,
                ],
                
                [
                    'id' => 10, 'observatii' => '', 'user_id' => 12, 'car_id' => 134, 'interval_id' => 1,
                ],
                
                
                
                
                                
                                                
            )            
        )->count(10)->create();
        
                

    }

}
