<?php

namespace Database\Seeders;

use App\Models\CarFuel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarFuelsTableSeeder extends Seeder
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
        $users = CarFuel::factory()->state(
            new Sequence(
                [
                    'name' => 'benzina',
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
