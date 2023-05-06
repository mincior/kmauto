<?php

namespace Database\Seeders;

use App\Models\CarConsumption;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarConsumptionsTableSeeder extends Seeder
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
        $carconsumptions = CarConsumption::factory()->state(
            new Sequence(
                [
                    'valoare' => 6.5,
                    'car_id' => 1,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 9,
                    'car_id' => 13,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 11,
                    'car_id' => 38,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 12,
                    'car_id' => 43,
                    'interval_id' => 1,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
