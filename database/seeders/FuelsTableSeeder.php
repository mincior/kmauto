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
     
     * 
     * @return void     
     */
    private function generate()
    {
        $users = Fuel::factory()->state(
            new Sequence(
                [
                    'name' => 'benzina',
                    'id' => 1,
                ],
                [
                    'name' => 'motorina',
                    'id' => 2,
                ],
                [
                    'name' => 'gaz',
                    'id' => 3,
                ],
                [
                    'name' => 'electric',
                    'id' => 4,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
