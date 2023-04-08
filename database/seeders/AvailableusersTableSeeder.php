<?php

namespace Database\Seeders;

use App\Models\Availableuser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class AvailableusersTableSeeder extends Seeder
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
        $users = Availableuser::factory()->state(
            new Sequence(
                [
                    'valoare' => 1,
                    'user_id' => 130,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'user_id' => 129,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 1,
                    'user_id' => 128,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 0,
                    'user_id' => 123,
                    'interval_id' => 1,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
