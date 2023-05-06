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
                    'name' => 'AA berlina',
                    'id' => 3,
                ],
                [
                    'name' => 'AF vehicul cu utilizare multipla',
                    'id' => 4,
                ],
                [
                    'name' => 'Combi',
                    'id' => 5,
                ],
                [
                    'name' => 'Plat cu prelata',
                    'id' => 6,
                ],
                [
                    'name' => 'BA06 cu prelata',
                    'id' => 7,
                ],
                [
                    'name' => 'AE cabriolet',
                    'id' => 8,
                ],
                [
                    'name' => 'AC break',
                    'id' => 9,
                ],
                [
                    'name' => 'AD cupeu',
                    'id' => 10,
                ],
                [
                    'name' => 'SEDAN',
                    'id' => 11,
                ],
                [
                    'name' => 'AA berlina cu hayon',
                    'id' => 12,
                ],
                [
                    'name' => 'Berlina cu hayon',
                    'id' => 13,
                ],
                [
                    'name' => 'Van BB furgon',
                    'id' => 14,
                ],
                [
                    'name' => 'Break, 4+1 usi',
                    'id' => 15,
                ],
                [
                    'name' => 'BA suprastructura deschisa',
                    'id' => 16,
                ],
                [
                    'name' => 'nespecificata',
                    'id' => 17,
                ],
                
            )            
        )->count(17)->create();
        
                

    }

}
