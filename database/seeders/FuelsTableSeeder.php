<?php

namespace Database\Seeders;

use App\Models\Fuel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class FuelsTableSeeder extends Seeder
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
        $users = Fuel::factory()->state(
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
