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
     * Inserts in DB users that are harcoded.
     * 
     * @return void     
     */
    private function generate()
    {
        $users = Brand::factory()->state(
            new Sequence(
                [
                    'name' => "Audi",
                ],
                [
                    'name' => 'Ford',
                ],
                [
                    'name' => 'Peugeot',
                ],
                [
                    'name' => 'Skoda',
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
