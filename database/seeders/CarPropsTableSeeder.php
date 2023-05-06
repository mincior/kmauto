<?php

namespace Database\Seeders;

use App\Models\CarProp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarPropsTableSeeder extends Seeder
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
        $brands = CarProp::factory()->state(
            new Sequence(
                [
                    'valoare' => "Consolight",
                    'id' => 1,
                ],
                [
                    'valoare' => 'ALD Automotive',
                    'id' => 2,
                ],
                [
                    'valoare' => 'LeasePlan',
                    'id' => 3,
                ],
                [
                    'valoare' => 'Porsche Mobility',
                    'id' => 4,
                ],
                [
                    'valoare' => 'Tiriac Leasing',
                    'id' => 5,
                ],
                [
                    'valoare' => 'Unicredit',
                    'id' => 6,
                ],
                [
                    'valoare' => 'Porsche Leasing',
                    'id' => 7,
                ],
                [
                    'valoare' => 'Raiffeisen Leasing',
                    'id' => 8,
                ],
                [
                    'valoare' => 'Arval',
                    'id' => 9,
                ],
                
            )            
        )->count(9)->create();
        
                

    }

}
