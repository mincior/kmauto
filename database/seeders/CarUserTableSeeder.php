<?php

namespace Database\Seeders;

use App\Models\CarUser;
use App\Models\CarDepartment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarUserTableSeeder extends Seeder
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
        $users = CarUser::factory()->state(
            new Sequence(
                [
                    'id' => 1, 'observatii' => '', 'user_id' => 1, 'car_id' => 1,
                ],
                
                [
                    'id' => 2, 'observatii' => '', 'user_id' => 2, 'car_id' => 2,
                ],
                
                [
                    'id' => 3, 'observatii' => '', 'user_id' => 3, 'car_id' => 3,
                ],
                
                [
                    'id' => 4, 'observatii' => '', 'user_id' => 4, 'car_id' => 4,
                ],
                
                [
                    'id' => 5, 'observatii' => '', 'user_id' => 5, 'car_id' => 5,
                ],
                
                [
                    'id' => 6, 'observatii' => '', 'user_id' => 6, 'car_id' => 6,
                ],
                
                [
                    'id' => 7, 'observatii' => '', 'user_id' => 7, 'car_id' => 7,
                ],
                
                [
                    'id' => 8, 'observatii' => '', 'user_id' => 8, 'car_id' => 8,
                ],
                
                [
                    'id' => 9, 'observatii' => '', 'user_id' => 9, 'car_id' => 9,
                ],
                
                [
                    'id' => 10, 'observatii' => '', 'user_id' => 10, 'car_id' => 10,
                ],
                
                [
                    'id' => 11, 'observatii' => '', 'user_id' => 11, 'car_id' => 11,
                ],
                
                [
                    'id' => 12, 'observatii' => '', 'user_id' => 12, 'car_id' => 12,
                ],
                
                [
                    'id' => 13, 'observatii' => '', 'user_id' => 13, 'car_id' => 13,
                ],
                
                [
                    'id' => 14, 'observatii' => '', 'user_id' => 14, 'car_id' => 14,
                ],
                
                [
                    'id' => 15, 'observatii' => '', 'user_id' => 15, 'car_id' => 15,
                ],
                
                [
                    'id' => 16, 'observatii' => '', 'user_id' => 16, 'car_id' => 16,
                ],
                
                [
                    'id' => 17, 'observatii' => '', 'user_id' => 17, 'car_id' => 17,
                ],
                
                [
                    'id' => 18, 'observatii' => '', 'user_id' => 18, 'car_id' => 18,
                ],
                
                [
                    'id' => 19, 'observatii' => '', 'user_id' => 19, 'car_id' => 19,
                ],
                
                [
                    'id' => 20, 'observatii' => '', 'user_id' => 20, 'car_id' => 20,
                ],
                
                [
                    'id' => 21, 'observatii' => '', 'user_id' => 21, 'car_id' => 21,
                ],
                
                [
                    'id' => 22, 'observatii' => '', 'user_id' => 22, 'car_id' => 22,
                ],
                
                [
                    'id' => 23, 'observatii' => '', 'user_id' => 23, 'car_id' => 23,
                ],
                
                [
                    'id' => 24, 'observatii' => '', 'user_id' => 24, 'car_id' => 24,
                ],
                
                [
                    'id' => 25, 'observatii' => '', 'user_id' => 25, 'car_id' => 25,
                ],
                
                [
                    'id' => 26, 'observatii' => '', 'user_id' => 26, 'car_id' => 26,
                ],
                
                [
                    'id' => 27, 'observatii' => '', 'user_id' => 27, 'car_id' => 27,
                ],
                
                [
                    'id' => 28, 'observatii' => '', 'user_id' => 28, 'car_id' => 28,
                ],
                
                [
                    'id' => 29, 'observatii' => '', 'user_id' => 29, 'car_id' => 29,
                ],
                
                [
                    'id' => 30, 'observatii' => '', 'user_id' => 30, 'car_id' => 30,
                ],
                
                [
                    'id' => 31, 'observatii' => '', 'user_id' => 31, 'car_id' => 31,
                ],
                
                [
                    'id' => 32, 'observatii' => '', 'user_id' => 32, 'car_id' => 32,
                ],
                
                [
                    'id' => 33, 'observatii' => '', 'user_id' => 33, 'car_id' => 33,
                ],
                
                [
                    'id' => 34, 'observatii' => '', 'user_id' => 34, 'car_id' => 34,
                ],
                
                [
                    'id' => 35, 'observatii' => '', 'user_id' => 35, 'car_id' => 35,
                ],
                
                [
                    'id' => 36, 'observatii' => '', 'user_id' => 36, 'car_id' => 36,
                ],
                
                [
                    'id' => 37, 'observatii' => '', 'user_id' => 37, 'car_id' => 37,
                ],
                
                [
                    'id' => 38, 'observatii' => '', 'user_id' => 38, 'car_id' => 38,
                ],
                
                [
                    'id' => 39, 'observatii' => '', 'user_id' => 39, 'car_id' => 39,
                ],
                
                [
                    'id' => 40, 'observatii' => '', 'user_id' => 40, 'car_id' => 40,
                ],
                
                [
                    'id' => 41, 'observatii' => '', 'user_id' => 41, 'car_id' => 41,
                ],
                
                [
                    'id' => 42, 'observatii' => '', 'user_id' => 42, 'car_id' => 42,
                ],
                
                [
                    'id' => 43, 'observatii' => '', 'user_id' => 43, 'car_id' => 43,
                ],
                
                [
                    'id' => 44, 'observatii' => '', 'user_id' => 44, 'car_id' => 44,
                ],
                
                [
                    'id' => 45, 'observatii' => '', 'user_id' => 45, 'car_id' => 45,
                ],
                
                [
                    'id' => 46, 'observatii' => '', 'user_id' => 46, 'car_id' => 46,
                ],
                
                [
                    'id' => 47, 'observatii' => '', 'user_id' => 47, 'car_id' => 47,
                ],
                
                [
                    'id' => 48, 'observatii' => '', 'user_id' => 48, 'car_id' => 48,
                ],
                
                [
                    'id' => 49, 'observatii' => '', 'user_id' => 49, 'car_id' => 49,
                ],
                
                [
                    'id' => 50, 'observatii' => '', 'user_id' => 50, 'car_id' => 50,
                ],
                
                [
                    'id' => 51, 'observatii' => '', 'user_id' => 51, 'car_id' => 51,
                ],
                
                [
                    'id' => 52, 'observatii' => '', 'user_id' => 52, 'car_id' => 52,
                ],
                
                [
                    'id' => 53, 'observatii' => '', 'user_id' => 53, 'car_id' => 53,
                ],
                
                [
                    'id' => 54, 'observatii' => '', 'user_id' => 54, 'car_id' => 54,
                ],
                
                [
                    'id' => 55, 'observatii' => '', 'user_id' => 55, 'car_id' => 55,
                ],
                
                [
                    'id' => 56, 'observatii' => '', 'user_id' => 56, 'car_id' => 56,
                ],
                
                [
                    'id' => 57, 'observatii' => '', 'user_id' => 57, 'car_id' => 57,
                ],
                
                [
                    'id' => 58, 'observatii' => '', 'user_id' => 58, 'car_id' => 58,
                ],
                
                [
                    'id' => 59, 'observatii' => '', 'user_id' => 59, 'car_id' => 59,
                ],
                
                [
                    'id' => 60, 'observatii' => '', 'user_id' => 60, 'car_id' => 60,
                ],
                
                [
                    'id' => 61, 'observatii' => '', 'user_id' => 61, 'car_id' => 61,
                ],
                
                [
                    'id' => 62, 'observatii' => '', 'user_id' => 62, 'car_id' => 62,
                ],
                
                [
                    'id' => 63, 'observatii' => '', 'user_id' => 63, 'car_id' => 63,
                ],
                
                [
                    'id' => 64, 'observatii' => '', 'user_id' => 64, 'car_id' => 64,
                ],
                
                [
                    'id' => 65, 'observatii' => '', 'user_id' => 65, 'car_id' => 65,
                ],
                
                [
                    'id' => 66, 'observatii' => '', 'user_id' => 66, 'car_id' => 66,
                ],
                
                [
                    'id' => 67, 'observatii' => '', 'user_id' => 67, 'car_id' => 67,
                ],
                
                [
                    'id' => 68, 'observatii' => '', 'user_id' => 68, 'car_id' => 68,
                ],
                
                [
                    'id' => 69, 'observatii' => '', 'user_id' => 69, 'car_id' => 69,
                ],
                
                [
                    'id' => 70, 'observatii' => '', 'user_id' => 70, 'car_id' => 70,
                ],
                
                [
                    'id' => 71, 'observatii' => '', 'user_id' => 71, 'car_id' => 71,
                ],
                
                [
                    'id' => 72, 'observatii' => '', 'user_id' => 72, 'car_id' => 72,
                ],
                
                [
                    'id' => 73, 'observatii' => '', 'user_id' => 73, 'car_id' => 73,
                ],
                
                [
                    'id' => 74, 'observatii' => '', 'user_id' => 74, 'car_id' => 74,
                ],
                
                [
                    'id' => 75, 'observatii' => '', 'user_id' => 75, 'car_id' => 75,
                ],
                
                [
                    'id' => 76, 'observatii' => '', 'user_id' => 76, 'car_id' => 76,
                ],
                
                [
                    'id' => 77, 'observatii' => '', 'user_id' => 77, 'car_id' => 77,
                ],
                
                [
                    'id' => 78, 'observatii' => '', 'user_id' => 78, 'car_id' => 78,
                ],
                
                [
                    'id' => 79, 'observatii' => '', 'user_id' => 79, 'car_id' => 79,
                ],
                
                [
                    'id' => 80, 'observatii' => '', 'user_id' => 80, 'car_id' => 80,
                ],
                
                [
                    'id' => 81, 'observatii' => '', 'user_id' => 81, 'car_id' => 81,
                ],
                
                [
                    'id' => 82, 'observatii' => '', 'user_id' => 82, 'car_id' => 82,
                ],
                
                [
                    'id' => 83, 'observatii' => '', 'user_id' => 83, 'car_id' => 83,
                ],
                
                [
                    'id' => 84, 'observatii' => '', 'user_id' => 84, 'car_id' => 84,
                ],
                
                [
                    'id' => 85, 'observatii' => '', 'user_id' => 85, 'car_id' => 85,
                ],
                
                [
                    'id' => 86, 'observatii' => '', 'user_id' => 86, 'car_id' => 86,
                ],
                
                [
                    'id' => 87, 'observatii' => '', 'user_id' => 87, 'car_id' => 87,
                ],
                
                [
                    'id' => 88, 'observatii' => '', 'user_id' => 88, 'car_id' => 88,
                ],
                
                [
                    'id' => 89, 'observatii' => '', 'user_id' => 89, 'car_id' => 89,
                ],
                
                [
                    'id' => 90, 'observatii' => '', 'user_id' => 90, 'car_id' => 90,
                ],
                
                [
                    'id' => 91, 'observatii' => '', 'user_id' => 91, 'car_id' => 91,
                ],
                
                [
                    'id' => 92, 'observatii' => '', 'user_id' => 92, 'car_id' => 92,
                ],
                
                [
                    'id' => 93, 'observatii' => '', 'user_id' => 93, 'car_id' => 93,
                ],
                
                [
                    'id' => 94, 'observatii' => '', 'user_id' => 94, 'car_id' => 94,
                ],
                
                [
                    'id' => 95, 'observatii' => '', 'user_id' => 95, 'car_id' => 95,
                ],
                
                [
                    'id' => 96, 'observatii' => '', 'user_id' => 96, 'car_id' => 96,
                ],
                
                [
                    'id' => 97, 'observatii' => '', 'user_id' => 97, 'car_id' => 97,
                ],
                
                [
                    'id' => 98, 'observatii' => '', 'user_id' => 98, 'car_id' => 98,
                ],
                
                [
                    'id' => 99, 'observatii' => '', 'user_id' => 99, 'car_id' => 99,
                ],
                
                [
                    'id' => 100, 'observatii' => '', 'user_id' => 100, 'car_id' => 100,
                ],
                
                [
                    'id' => 101, 'observatii' => '', 'user_id' => 101, 'car_id' => 101,
                ],
                
                [
                    'id' => 102, 'observatii' => '', 'user_id' => 102, 'car_id' => 102,
                ],
                
                [
                    'id' => 103, 'observatii' => '', 'user_id' => 103, 'car_id' => 103,
                ],
                
                [
                    'id' => 104, 'observatii' => '', 'user_id' => 104, 'car_id' => 104,
                ],
                
                [
                    'id' => 105, 'observatii' => '', 'user_id' => 105, 'car_id' => 105,
                ],
                
                [
                    'id' => 106, 'observatii' => '', 'user_id' => 106, 'car_id' => 106,
                ],
                
                [
                    'id' => 107, 'observatii' => '', 'user_id' => 107, 'car_id' => 107,
                ],
                
                [
                    'id' => 108, 'observatii' => '', 'user_id' => 108, 'car_id' => 108,
                ],
                
                [
                    'id' => 109, 'observatii' => '', 'user_id' => 109, 'car_id' => 109,
                ],
                
                [
                    'id' => 110, 'observatii' => '', 'user_id' => 110, 'car_id' => 110,
                ],
                
                [
                    'id' => 111, 'observatii' => '', 'user_id' => 111, 'car_id' => 111,
                ],
                
                [
                    'id' => 112, 'observatii' => '', 'user_id' => 112, 'car_id' => 12,
                ],
                
                [
                    'id' => 113, 'observatii' => '', 'user_id' => 113, 'car_id' => 13,
                ],
                
                [
                    'id' => 114, 'observatii' => '', 'user_id' => 114, 'car_id' => 14,
                ],
                
                [
                    'id' => 115, 'observatii' => '', 'user_id' => 115, 'car_id' => 15,
                ],
                
                [
                    'id' => 116, 'observatii' => '', 'user_id' => 116, 'car_id' => 16,
                ],
                
                [
                    'id' => 117, 'observatii' => '', 'user_id' => 117, 'car_id' => 17,
                ],
                
                [
                    'id' => 118, 'observatii' => '', 'user_id' => 118, 'car_id' => 18,
                ],
                
                [
                    'id' => 119, 'observatii' => '', 'user_id' => 119, 'car_id' => 19,
                ],
                
                [
                    'id' => 120, 'observatii' => '', 'user_id' => 120, 'car_id' => 10,
                ],
                
                [
                    'id' => 121, 'observatii' => '', 'user_id' => 121, 'car_id' => 11,
                ],
                
                [
                    'id' => 122, 'observatii' => '', 'user_id' => 122, 'car_id' => 12,
                ],
                
                [
                    'id' => 123, 'observatii' => '', 'user_id' => 123, 'car_id' => 13,
                ],
                
                [
                    'id' => 124, 'observatii' => '', 'user_id' => 124, 'car_id' => 14,
                ],
                
                [
                    'id' => 125, 'observatii' => '', 'user_id' => 125, 'car_id' => 15,
                ],
                
                [
                    'id' => 126, 'observatii' => '', 'user_id' => 126, 'car_id' => 16,
                ],
                
                [
                    'id' => 127, 'observatii' => '', 'user_id' => 127, 'car_id' => 17,
                ],
                
                [
                    'id' => 128, 'observatii' => '', 'user_id' => 128, 'car_id' => 18,
                ],
                
                [
                    'id' => 129, 'observatii' => '', 'user_id' => 129, 'car_id' => 29,
                ],
                
                [
                    'id' => 130, 'observatii' => '', 'user_id' => 130, 'car_id' => 130,
                ],
                
                
                                
                                                
            )            
        )->count(130)->create();
        
                

    }

}
