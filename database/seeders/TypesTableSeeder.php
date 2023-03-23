<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TypesTableSeeder extends Seeder
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
        $users = Type::factory()->state(
            new Sequence(
                [
                    'name' => "A7",
                    'brand_id' => '1'
                ],
                [
                    'name' => 'Transit',
                    'brand_id' => '2'
                ],
                [
                    'name' => 'Focus',
                    'brand_id' => '2'
                ],
                [
                    'name' => 'Mondeo',
                    'brand_id' => '2'
                ],
                [
                    'name' => 'Partner',
                    'brand_id' => '3'
                ],
                [
                    'name' => '208',
                    'brand_id' => '3'
                ],
                [
                    'name' => '508',
                    'brand_id' => '3'
                ],
                [
                    'name' => '308',
                    'brand_id' => '3'
                ],
                [
                    'name' => 'Boxer',
                    'brand_id' => '3'
                ],
                [
                    'name' => '301',
                    'brand_id' => '3'
                ],
                [
                    'name' => 'Octavia',
                    'brand_id' => '4'
                ],
                [
                    'name' => 'Scala',
                    'brand_id' => '4'
                ],
                [
                    'name' => 'Superb',
                    'brand_id' => '4'
                ],
                [
                    'name' => 'Fabia',
                    'brand_id' => '4'
                ],
                [
                    'name' => 'Kodiak',
                    'brand_id' => '4'
                ],
                
            )            
        )->count(15)->create();
        
                

    }

}
