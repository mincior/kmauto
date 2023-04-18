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
                    'department_id' => "1",
                    'created_at' => "2023-04-01 10:14:13",
                    'updated_at' => "2023-04-01 14:14:25",
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
                    'department_id' => "1",
                    'created_at' => "2023-04-01 16:17:29",
                    'updated_at' => "2023-04-01 14:18:29",
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
                    'department_id' => "1",
                    'created_at' => "2023-03-01 13:14:23",
                    'updated_at' => "2023-03-01 12:15:44",
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
                    'department_id' => "1",
                    'created_at' => "2023-04-01 13:16:23",
                    'updated_at' => "2023-04-01 12:17:23",
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
                    'department_id' => "1",
                    'created_at' => "2023-04-01 11:12:23",
                    'updated_at' => "2023-04-01 11:11:23",
                ],
                
            )            
        )->count(5)->create();
        
                

    }

}
