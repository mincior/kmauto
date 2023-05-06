<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\CarAsig;
use App\Models\CarStat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarAsigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy customers
        $this->generate();
    }

        /**
     
     * 
     * @return void     
     */
    private function generate()
    {
        $carasigs = CarAsig::factory()->state(
            new Sequence(
                [
                    'name' => "Groupama",
                    'id' => 1,
                ],
                [
                    'name' => 'Fara',
                    'id' => 2,
                ],
                [
                    'name' => 'Omniasig',
                    'id' => 3,
                ],
                [
                    'name' => 'Alianz',
                    'id' => 4,
                ],
                [
                    'name' => 'Asirom',
                    'id' => 5,
                ],
                
            )            
        )->count(5)->create();
        
                

    }

}
