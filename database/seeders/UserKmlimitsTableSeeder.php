<?php

namespace Database\Seeders;

use App\Models\UserKmlimit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserKmlimitsTableSeeder extends Seeder
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
        $users = UserKmlimit::factory()->state(
            new Sequence(
                [
                    'valoare' => 34,
                    'user_id' => 121,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 56,
                    'user_id' => 130,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => 67,
                    'user_id' => 128,
                    'interval_id' => 1,
                ],
                [
                    'valoare' =>26,
                    'user_id' => 123,
                    'interval_id' => 1,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
