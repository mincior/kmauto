<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class StatsTableSeeder extends Seeder
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
        $users = Stat::factory()->state(
            new Sequence(
                [
                    'id' => "1",
                    'name' => 'Referinta'
                ],
                [
                    'id' => "2",
                    'name' => 'Normal'
                ],
                [
                    'id' => "3",
                    'name' => 'Plecare in interes serviciu'
                ],
                [
                    'id' => "4",
                    'name' => 'Sosire din interes serviciu'
                ],
                [
                    'id' => "5",
                    'name' => 'Plecare in concediu'
                ],
                [
                    'id' => "6",
                    'name' => 'Card personal'
                ],
                
            )            
        )->count(6)->create();
        
                

    }

}
