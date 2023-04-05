<?php

namespace Database\Seeders;

use App\Models\CarUser;
use App\Models\CarDepartment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarUserTableSeeder extends Seeder
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
        $users = CarUser::factory()->state(
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
