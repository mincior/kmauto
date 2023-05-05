<?php

namespace Database\Seeders;

use App\Models\Frame;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class FramesTableSeeder extends Seeder
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
        $frames = Frame::factory()->state(
            new Sequence(
                [
                    'name' => 'BB Furgon',
                    'id' => 1,
                ],
                [
                    'name' => 'AB berlina cu hayon',
                    'id' => 2,
                ],
                [
                    'name' => 'AF vehicul cu utilizare multipla',
                    'id' => 3,
                ],
                [
                    'name' => 'Combi',
                    'id' => 4,
                ],
                [
                    'name' => 'Plat cu prelata',
                    'id' => 5,
                ],
                [
                    'name' => 'BA06 cu prelata',
                    'id' => 6,
                ],
                [
                    'name' => 'AE cabriolet',
                    'id' => 7,
                ],
                [
                    'name' => 'AC break',
                    'id' => 8,
                ],
                [
                    'name' => 'AD cupeu',
                    'id' => 9,
                ],
                [
                    'name' => 'SEDAN',
                    'id' => 10,
                ],
                [
                    'name' => 'AA berlina cu hayon',
                    'id' => 11,
                ],
                [
                    'name' => 'Berlina cu hayon',
                    'id' => 12,
                ],
                
            )            
        )->count(12)->create();
        
                

    }

}
