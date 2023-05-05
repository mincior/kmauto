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
                    'name' => "Folosita",
                    'id' => 1,
                ],
                [
                    'name' => 'De Vanzare',
                    'id' => 2,
                ],
                [
                    'name' => 'HUB',
                    'id' => 3,
                ],
                
            )            
        )->count(3)->create();
        
                

    }

}
