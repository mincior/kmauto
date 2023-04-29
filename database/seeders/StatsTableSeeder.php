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
                    'name' => 'Normal'
                ],
                [
                    'id' => "2",
                    'name' => 'Nu se pune la plata'
                ],
                
            )            
        )->count(2)->create();
        
                

    }

}
