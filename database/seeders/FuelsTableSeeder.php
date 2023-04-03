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
                ],
                [
                    'valoare' => 9,
                ],
                [
                    'valoare' => 11,
                ],
                [
                    'valoare' => 12,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
