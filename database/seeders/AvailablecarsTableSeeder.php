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
     * Inserts in DB users that are harcoded.
     * 
     * @return void     
     */
    private function generate()
    {
        $users = Availablecar::factory()->state(
            new Sequence(
                [
                    'valoare' => 1,
                    'car_id' => 140,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 139,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'car_id' => 138,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 0,
                    'car_id' => 143,
                    'interval_id' => 1,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
