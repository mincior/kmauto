<?php

namespace Database\Seeders;

use App\Models\CarProp;
use App\Models\CarPropValue;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarPropValuesTableSeeder extends Seeder
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
        $brands = CarPropValue::factory()->state(
            new Sequence(
                [
                    'name' => "Consolight",
                    'id' => 1,
                ],
                [
                    'name' => 'ALD Automotive',
                    'id' => 2,
                ],
                [
                    'name' => 'LeasePlan',
                    'id' => 3,
                ],
                [
                    'name' => 'Porsche Mobility',
                    'id' => 4,
                ],
                [
                    'name' => 'Tiriac Leasing',
                    'id' => 5,
                ],
                [
                    'name' => 'Unicredit',
                    'id' => 6,
                ],
                [
                    'name' => 'Porsche Leasing',
                    'id' => 7,
                ],
                [
                    'name' => 'Raiffeisen Leasing',
                    'id' => 8,
                ],
                [
                    'name' => 'Arval',
                    'id' => 9,
                ],
                
            )            
        )->count(9)->create();
        
                

    }

}
