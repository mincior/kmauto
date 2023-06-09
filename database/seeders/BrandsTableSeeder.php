<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class BrandsTableSeeder extends Seeder
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
        $brands = Brand::factory()->state(
            new Sequence(
                [
                    'name' => "Peugeot",
                    'id' => 1,
                ],
                [
                    'name' => 'Ford',
                    'id' => 2,
                ],
                [
                    'name' => 'Skoda',
                    'id' => 3,
                ],
                [
                    'name' => 'JEEP',
                    'id' => 4,
                ],
                [
                    'name' => 'Porsche',
                    'id' => 5,
                ],
                [
                    'name' => 'Audi',
                    'id' => 6,
                ],
                [
                    'name' => 'Mercedes',
                    'id' => 7,
                ],
                [
                    'name' => 'Land ROVER',
                    'id' => 8,
                ],
                [
                    'name' => 'Dacia',
                    'id' => 9,
                ],
                [
                    'name' => 'Toyota',
                    'id' => 10,
                ],
                [
                    'name' => 'Mitsubishi',
                    'id' => 11,
                ],
                [
                    'name' => 'Citroen',
                    'id' => 12,
                ],
                [
                    'name' => 'BMW',
                    'id' => 13,
                ],
                [
                    'name' => 'VW',
                    'id' => 14,
                ],
                
            )            
        )->count(14)->create();
        
                

    }

}
