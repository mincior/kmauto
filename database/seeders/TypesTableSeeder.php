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
     
     * 
     * @return void     
     */
    private function generate()
    {
        $types = Type::factory()->state(
            new Sequence(
                [
                    'name' => "Partner",
                    'brand_id' => 1, 
                    'id' => 1,
                ],
                [
                    'name' => "Focus",
                    'brand_id' => 2, 
                    'id' => 2,
                ],
                [
                    'name' => "508",
                    'brand_id' => 1, 
                    'id' => 3,
                ],
                [
                    'name' => "308",
                    'brand_id' => 1, 
                    'id' => 4,
                ],
                [
                    'name' => "Boxer",
                    'brand_id' => 1, 
                    'id' => 5,
                ],
                [
                    'name' => "Octavia",
                    'brand_id' => 3, 
                    'id' => 6,
                ],
                [
                    'name' => "Transit",
                    'brand_id' => 2, 
                    'id' => 7,
                ],
                [
                    'name' => "Wrangler",
                    'brand_id' => 4, 
                    'id' => 8,
                ],
                [
                    'name' => "Cayenne",
                    'brand_id' => 5, 
                    'id' => 9,
                ],
                [
                    'name' => "A7",
                    'brand_id' => 6, 
                    'id' => 10,
                ],
                [
                    'name' => "S450",
                    'brand_id' => 7, 
                    'id' => 11,
                ],
                [
                    'name' => "EVOQUE",
                    'brand_id' => 8, 
                    'id' => 12,
                ],
                [
                    'name' => "Mondeo",
                    'brand_id' => 2, 
                    'id' => 13,
                ],
                [
                    'name' => "301",
                    'brand_id' => 1, 
                    'id' => 14,
                ],
                [
                    'name' => "Fabia",
                    'brand_id' => 3, 
                    'id' => 15,
                ],
                [
                    'name' => "Scala",
                    'brand_id' => 3, 
                    'id' => 16,
                ],
                [
                    'name' => "Superb",
                    'brand_id' => 3, 
                    'id' => 17,
                ],
                [
                    'name' => "Spring",
                    'brand_id' => 9, 
                    'id' => 18,
                ],
                [
                    'name' => "208",
                    'brand_id' => 1, 
                    'id' => 19,
                ],
                [
                    'name' => "Kodiaq",
                    'brand_id' => 3, 
                    'id' => 20,
                ],
                [
                    'name' => "RAV 4",
                    'brand_id' => 10, 
                    'id' => 21,
                ],
                [
                    'name' => "Logan",
                    'brand_id' => 9, 
                    'id' => 22,
                ],
                [
                    'name' => "207",
                    'brand_id' => 1, 
                    'id' => 23,
                ],
                [
                    'name' => "407",
                    'brand_id' => 1, 
                    'id' => 24,
                ],
                [
                    'name' => "Outlander",
                    'brand_id' => 11, 
                    'id' => 25,
                ],
                [
                    'name' => "Jumper",
                    'brand_id' => 12, 
                    'id' => 26,
                ],
                [
                    'name' => "X6",
                    'brand_id' => 13, 
                    'id' => 27,
                ],
                [
                    'name' => "207",
                    'brand_id' => 1, 
                    'id' => 28,
                ],
                [
                    'name' => "308 SW",
                    'brand_id' => 1, 
                    'id' => 29,
                ],
                [
                    'name' => "Golf",
                    'brand_id' => 14, 
                    'id' => 30,
                ],
                
            )            
        )->count(30)->create();
        
                

    }

}
