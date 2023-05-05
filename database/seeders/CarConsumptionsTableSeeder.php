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
                    'car_id' => 140,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 9,
                    'car_id' => 139,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 11,
                    'car_id' => 138,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 12,
                    'car_id' => 143,
                    'interval_id' => 1,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
