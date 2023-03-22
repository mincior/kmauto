<?php

namespace Database\Seeders;

use App\Models\DepartmentUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DepartmentUserTableSeeder extends Seeder
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
        $users = DepartmentUser::factory()->state(
            new Sequence(
                [
                    'department_id' => "1",
                    'user_id' => '1',
                    'data' => '2023-11-01',
                    'observatii' => 'nimic de notificat',
                ],
                [
                    'department_id' => "3",
                    'user_id' => '2',
                    'data' => '2023-01-02',
                    'observatii' => 'nimic de notificat',
                ],
                [
                    'department_id' => "12",
                    'user_id' => '1',
                    'data' => '2023-03-01',
                    'observatii' => 'nimic de notificat',
                ],
                [
                    'department_id' => "11",
                    'user_id' => '1',
                    'data' => '2023-04-05',
                    'observatii' => 'nimic de notificat',
                ],
                [
                    'department_id' => "4",
                    'user_id' => '3',
                    'data' => '2023-03-02',
                    'observatii' => 'nimic de notificat',
                ],
                                
            )            
        )->count(5)->create();
        
                

    }

}
