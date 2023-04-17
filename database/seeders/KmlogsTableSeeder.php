<?php

namespace Database\Seeders;

use App\Models\Kmlog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class KmlogsTableSeeder extends Seeder
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
     * Inserts in DB kmlogs that are harcoded.
     * 
     * @return void     
     */
    private function generate()
    {
        $kmlogs = KmLog::factory()->state(
            new Sequence(
                [
                    'id' => "1",
                    'km' => 234, 
                    'picture' => "Adauga aici o poza",
                    'observatii' => "Nu sunt",
                    'ordine' => "2",
                    'interval_id' => "8",
                    'user_id' => "1",
                    'car_id' => "1",
                    'stat_id' => "1",
                ],
                [
                    'id' => "2",
                    'km' => 354, 
                    'picture' => "Adauga aici o poza",
                    'observatii' => "Nu sunt",
                    'ordine' => "1",
                    'interval_id' => "4",
                    'user_id' => "1",
                    'car_id' => "1",
                    'stat_id' => "1",
                ],
                [
                    'id' => "3",
                    'km' => 765, 
                    'picture' => "Adauga aici o poza",
                    'observatii' => "Nu sunt",
                    'ordine' => "3",
                    'interval_id' => "1",
                    'user_id' => "1",
                    'car_id' => "1",
                    'stat_id' => "1",
                ],
                [
                    'id' => "4",
                    'km' => 665, 
                    'picture' => "Adauga aici o poza",
                    'observatii' => "Nu sunt",
                    'ordine' => "5",
                    'interval_id' => "11",
                    'user_id' => "1",
                    'car_id' => "1",
                    'stat_id' => "1",
                ],
                [
                    'id' => "5",
                    'km' => 12, 
                    'picture' => "Adauga aici o poza",
                    'observatii' => "Nu sunt",
                    'ordine' => "4",
                    'interval_id' => "14",
                    'user_id' => "1",
                    'car_id' => "1",
                    'stat_id' => "1",
                ],
                
            )            
        )->count(5)->create();
        
                

    }

}
