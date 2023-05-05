<?php

namespace Database\Seeders;

use App\Models\FuelPrice;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class FuelPricesTableSeeder extends Seeder
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
        $users = FuelPrice::factory()->state(
            new Sequence(
                [
                    'valoare' => 6.5,
                    'fuel_id' => 1,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 9.4,
                    'fuel_id' => 2,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 8.8,
                    'fuel_id' => 3,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 124,
                    'fuel_id' => 4,
                    'interval_id' => 1,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
