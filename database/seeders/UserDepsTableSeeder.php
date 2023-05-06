<?php

namespace Database\Seeders;

use App\Models\DepartmentUser;
use App\Models\UserDep;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserDepsTableSeeder extends Seeder
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
        $users = UserDep::factory()->state(
            new Sequence(
                [
                    'id' => 1, 'department_id' => 11, 'interval_id' => 1 , 'user_id' => 1, 'observatii' => ''
                ],
                [
                    'id' => 2, 'department_id' => 7, 'interval_id' => 1 , 'user_id' => 2, 'observatii' => ''
                ],
                [
                    'id' => 3, 'department_id' => 8, 'interval_id' => 1 , 'user_id' => 3, 'observatii' => 'Este plecat din firma cu data de 14 feb'
                ],
                [
                    'id' => 4, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 4, 'observatii' => ''
                ],
                [
                    'id' => 5, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 5, 'observatii' => ''
                ],
                [
                    'id' => 6, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 6, 'observatii' => ''
                ],
                [
                    'id' => 7, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 7, 'observatii' => ''
                ],
                [
                    'id' => 8, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 8, 'observatii' => ''
                ],
                [
                    'id' => 9, 'department_id' => 11, 'interval_id' => 1 , 'user_id' => 9, 'observatii' => ''
                ],
                [
                    'id' => 10, 'department_id' => 12, 'interval_id' => 1 , 'user_id' => 10, 'observatii' => 'Pleaca cu 1 martie'
                ],
                [
                    'id' => 11, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 11, 'observatii' => ''
                ],
                [
                    'id' => 12, 'department_id' => 15, 'interval_id' => 1 , 'user_id' => 12, 'observatii' => ''
                ],
                [
                    'id' => 13, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 13, 'observatii' => ''
                ],
                [
                    'id' => 14, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 14, 'observatii' => ''
                ],
                [
                    'id' => 15, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 15, 'observatii' => ''
                ],
                [
                    'id' => 16, 'department_id' => 12, 'interval_id' => 1 , 'user_id' => 16, 'observatii' => ''
                ],
                [
                    'id' => 17, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 17, 'observatii' => ''
                ],
                [
                    'id' => 18, 'department_id' => 13, 'interval_id' => 1 , 'user_id' => 18, 'observatii' => 'Pricepe g'
                ],
                [
                    'id' => 19, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 19, 'observatii' => ''
                ],
                [
                    'id' => 20, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 20, 'observatii' => ''
                ],
                [
                    'id' => 21, 'department_id' => 5, 'interval_id' => 1 , 'user_id' => 21, 'observatii' => ''
                ],
                [
                    'id' => 22, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 22, 'observatii' => ''
                ],
                [
                    'id' => 23, 'department_id' => 11, 'interval_id' => 1 , 'user_id' => 23, 'observatii' => ''
                ],
                [
                    'id' => 24, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 24, 'observatii' => ''
                ],
                [
                    'id' => 25, 'department_id' => 13, 'interval_id' => 1 , 'user_id' => 25, 'observatii' => ''
                ],
                [
                    'id' => 26, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 26, 'observatii' => ''
                ],
                [
                    'id' => 27, 'department_id' => 14, 'interval_id' => 1 , 'user_id' => 27, 'observatii' => 'Sef filiala Otopeni'
                ],
                [
                    'id' => 28, 'department_id' => 10, 'interval_id' => 1 , 'user_id' => 28, 'observatii' => ''
                ],
                [
                    'id' => 29, 'department_id' => 5, 'interval_id' => 1 , 'user_id' => 29, 'observatii' => ''
                ],
                [
                    'id' => 30, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 30, 'observatii' => 'Nu mai lucreaza cu 1 martie'
                ],
                [
                    'id' => 31, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 31, 'observatii' => ''
                ],
                [
                    'id' => 32, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 32, 'observatii' => ''
                ],
                [
                    'id' => 33, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 33, 'observatii' => ''
                ],
                [
                    'id' => 34, 'department_id' => 5, 'interval_id' => 1 , 'user_id' => 34, 'observatii' => ''
                ],
                [
                    'id' => 35, 'department_id' => 8, 'interval_id' => 1 , 'user_id' => 35, 'observatii' => ''
                ],
                [
                    'id' => 36, 'department_id' => 10, 'interval_id' => 1 , 'user_id' => 36, 'observatii' => ''
                ],
                [
                    'id' => 37, 'department_id' => 15, 'interval_id' => 1 , 'user_id' => 37, 'observatii' => ''
                ],
                [
                    'id' => 38, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 38, 'observatii' => 'Solicitare marire limita km in curs'
                ],
                [
                    'id' => 39, 'department_id' => 10, 'interval_id' => 1 , 'user_id' => 39, 'observatii' => ''
                ],
                [
                    'id' => 40, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 40, 'observatii' => ''
                ],
                [
                    'id' => 41, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 41, 'observatii' => ''
                ],
                [
                    'id' => 42, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 42, 'observatii' => 'Se va sterge. Nu mai lucreaza la Consolight'
                ],
                [
                    'id' => 43, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 43, 'observatii' => ''
                ],
                [
                    'id' => 44, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 44, 'observatii' => ''
                ],
                [
                    'id' => 45, 'department_id' => 14, 'interval_id' => 1 , 'user_id' => 45, 'observatii' => ''
                ],
                [
                    'id' => 46, 'department_id' => 14, 'interval_id' => 1 , 'user_id' => 46, 'observatii' => ''
                ],
                [
                    'id' => 47, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 47, 'observatii' => ''
                ],
                [
                    'id' => 48, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 48, 'observatii' => 'ghimismarian87@gmail.com'
                ],
                [
                    'id' => 49, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 49, 'observatii' => ''
                ],
                [
                    'id' => 50, 'department_id' => 14, 'interval_id' => 1 , 'user_id' => 50, 'observatii' => ''
                ],
                [
                    'id' => 51, 'department_id' => 7, 'interval_id' => 1 , 'user_id' => 51, 'observatii' => ''
                ],
                [
                    'id' => 52, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 52, 'observatii' => ''
                ],
                [
                    'id' => 53, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 53, 'observatii' => ''
                ],
                [
                    'id' => 54, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 54, 'observatii' => ''
                ],
                [
                    'id' => 55, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 55, 'observatii' => ''
                ],
                [
                    'id' => 56, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 56, 'observatii' => ''
                ],
                [
                    'id' => 57, 'department_id' => 5, 'interval_id' => 1 , 'user_id' => 57, 'observatii' => ''
                ],
                [
                    'id' => 58, 'department_id' => 12, 'interval_id' => 1 , 'user_id' => 58, 'observatii' => ''
                ],
                [
                    'id' => 59, 'department_id' => 14, 'interval_id' => 1 , 'user_id' => 59, 'observatii' => ''
                ],
                [
                    'id' => 60, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 60, 'observatii' => 'dobre_alex2003@yahoo.com'
                ],
                [
                    'id' => 61, 'department_id' => 5, 'interval_id' => 1 , 'user_id' => 61, 'observatii' => 'Se va scoate. A fost scos din Google. A plecat din firma incepand cu 13 feb 2023'
                ],
                [
                    'id' => 62, 'department_id' => 10, 'interval_id' => 1 , 'user_id' => 62, 'observatii' => ''
                ],
                [
                    'id' => 63, 'department_id' => 12, 'interval_id' => 1 , 'user_id' => 63, 'observatii' => ''
                ],
                [
                    'id' => 64, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 64, 'observatii' => 'Se va sterge, e plecat din firma'
                ],
                [
                    'id' => 65, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 65, 'observatii' => ''
                ],
                [
                    'id' => 66, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 66, 'observatii' => ''
                ],
                [
                    'id' => 67, 'department_id' => 7, 'interval_id' => 1 , 'user_id' => 67, 'observatii' => ''
                ],
                [
                    'id' => 68, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 68, 'observatii' => ''
                ],
                [
                    'id' => 69, 'department_id' => 13, 'interval_id' => 1 , 'user_id' => 69, 'observatii' => ''
                ],
                [
                    'id' => 70, 'department_id' => 5, 'interval_id' => 1 , 'user_id' => 70, 'observatii' => 'Nu mai lucreaza din 20 ian'
                ],
                [
                    'id' => 71, 'department_id' => 5, 'interval_id' => 1 , 'user_id' => 71, 'observatii' => ''
                ],
                [
                    'id' => 72, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 72, 'observatii' => ''
                ],
                [
                    'id' => 73, 'department_id' => 11, 'interval_id' => 1 , 'user_id' => 73, 'observatii' => ''
                ],
                [
                    'id' => 74, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 74, 'observatii' => ''
                ],
                [
                    'id' => 75, 'department_id' => 7, 'interval_id' => 1 , 'user_id' => 75, 'observatii' => ''
                ],
                [
                    'id' => 76, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 76, 'observatii' => ''
                ],
                [
                    'id' => 77, 'department_id' => 13, 'interval_id' => 1 , 'user_id' => 77, 'observatii' => ''
                ],
                [
                    'id' => 78, 'department_id' => 14, 'interval_id' => 1 , 'user_id' => 78, 'observatii' => ''
                ],
                [
                    'id' => 79, 'department_id' => 10, 'interval_id' => 1 , 'user_id' => 79, 'observatii' => '!'
                ],
                [
                    'id' => 80, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 80, 'observatii' => ''
                ],
                [
                    'id' => 81, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 81, 'observatii' => ''
                ],
                [
                    'id' => 82, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 82, 'observatii' => ''
                ],
                [
                    'id' => 83, 'department_id' => 13, 'interval_id' => 1 , 'user_id' => 83, 'observatii' => ''
                ],
                [
                    'id' => 84, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 84, 'observatii' => ''
                ],
                [
                    'id' => 85, 'department_id' => 13, 'interval_id' => 1 , 'user_id' => 85, 'observatii' => ''
                ],
                [
                    'id' => 86, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 86, 'observatii' => ''
                ],
                [
                    'id' => 87, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 87, 'observatii' => ''
                ],
                [
                    'id' => 88, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 88, 'observatii' => 'Eoliene'
                ],
                [
                    'id' => 89, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 89, 'observatii' => ''
                ],
                [
                    'id' => 90, 'department_id' => 7, 'interval_id' => 1 , 'user_id' => 90, 'observatii' => ''
                ],
                [
                    'id' => 91, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 91, 'observatii' => ''
                ],
                [
                    'id' => 92, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 92, 'observatii' => ''
                ],
                [
                    'id' => 93, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 93, 'observatii' => ''
                ],
                [
                    'id' => 94, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 94, 'observatii' => ''
                ],
                [
                    'id' => 95, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 95, 'observatii' => ''
                ],
                [
                    'id' => 96, 'department_id' => 8, 'interval_id' => 1 , 'user_id' => 96, 'observatii' => 'Pleaca cu 1 martie'
                ],
                [
                    'id' => 97, 'department_id' => 11, 'interval_id' => 1 , 'user_id' => 97, 'observatii' => ''
                ],
                [
                    'id' => 98, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 98, 'observatii' => ''
                ],
                [
                    'id' => 99, 'department_id' => 12, 'interval_id' => 1 , 'user_id' => 99, 'observatii' => ''
                ],
                [
                    'id' => 100, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 100, 'observatii' => ''
                ],
                [
                    'id' => 101, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 101, 'observatii' => ''
                ],
                [
                    'id' => 102, 'department_id' => 2, 'interval_id' => 1 , 'user_id' => 102, 'observatii' => ''
                ],
                [
                    'id' => 103, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 103, 'observatii' => ''
                ],
                [
                    'id' => 104, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 104, 'observatii' => ''
                ],
                [
                    'id' => 105, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 105, 'observatii' => ''
                ],
                [
                    'id' => 106, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 106, 'observatii' => ''
                ],
                [
                    'id' => 107, 'department_id' => 14, 'interval_id' => 1 , 'user_id' => 107, 'observatii' => ''
                ],
                [
                    'id' => 108, 'department_id' => 7, 'interval_id' => 1 , 'user_id' => 108, 'observatii' => ''
                ],
                [
                    'id' => 109, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 109, 'observatii' => ''
                ],
                [
                    'id' => 110, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 110, 'observatii' => ''
                ],
                [
                    'id' => 111, 'department_id' => 10, 'interval_id' => 1 , 'user_id' => 111, 'observatii' => 'Primeste seful d-lui, Dumitriu Stefan'
                ],
                [
                    'id' => 112, 'department_id' => 10, 'interval_id' => 1 , 'user_id' => 112, 'observatii' => ''
                ],
                [
                    'id' => 113, 'department_id' => 10, 'interval_id' => 1 , 'user_id' => 113, 'observatii' => 'Se va sterge - a incheiat activitatea la 1 feb 2023'
                ],
                [
                    'id' => 114, 'department_id' => 1, 'interval_id' => 1 , 'user_id' => 114, 'observatii' => ''
                ],
                [
                    'id' => 115, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 115, 'observatii' => ''
                ],
                [
                    'id' => 116, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 116, 'observatii' => ''
                ],
                [
                    'id' => 117, 'department_id' => 7, 'interval_id' => 1 , 'user_id' => 117, 'observatii' => ''
                ],
                [
                    'id' => 118, 'department_id' => 16, 'interval_id' => 1 , 'user_id' => 118, 'observatii' => ''
                ],
                [
                    'id' => 119, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 119, 'observatii' => ''
                ],
                [
                    'id' => 120, 'department_id' => 14, 'interval_id' => 1 , 'user_id' => 120, 'observatii' => 'Sef depozit Otopeni'
                ],
                [
                    'id' => 121, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 121, 'observatii' => ''
                ],
                [
                    'id' => 122, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 122, 'observatii' => ''
                ],
                [
                    'id' => 123, 'department_id' => 3, 'interval_id' => 1 , 'user_id' => 123, 'observatii' => ''
                ],
                [
                    'id' => 124, 'department_id' => 2, 'interval_id' => 1 , 'user_id' => 124, 'observatii' => ''
                ],
                [
                    'id' => 125, 'department_id' => 2, 'interval_id' => 1 , 'user_id' => 125, 'observatii' => ''
                ],
                [
                    'id' => 126, 'department_id' => 5, 'interval_id' => 1 , 'user_id' => 126, 'observatii' => ''
                ],
                [
                    'id' => 127, 'department_id' => 7, 'interval_id' => 1 , 'user_id' => 127, 'observatii' => ''
                ],
                [
                    'id' => 128, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 128, 'observatii' => ''
                ],
                [
                    'id' => 129, 'department_id' => 9, 'interval_id' => 1 , 'user_id' => 129, 'observatii' => ''
                ],
                [
                    'id' => 130, 'department_id' => 4, 'interval_id' => 1 , 'user_id' => 130, 'observatii' => ''
                ],
                                                
            )            
        )->count(130)->create();
        
                

    }

}
