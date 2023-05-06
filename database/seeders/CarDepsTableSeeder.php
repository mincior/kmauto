<?php

namespace Database\Seeders;

use App\Models\CarDep;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarDepsTableSeeder extends Seeder
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
        $users = CarDep::factory()->state(
            new Sequence(
                [
                    'id' => 1, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 1, 'observatii' => 'aa',
                ],
                
                [
                    'id' => 2, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 2, 'observatii' => 'aa',
                ],
                
                [
                    'id' => 3, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 3, 'observatii' => '',
                ],
                
                [
                    'id' => 4, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 4, 'observatii' => '',
                ],
                
                [
                    'id' => 5, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 5, 'observatii' => 'Nu merge',
                ],
                
                [
                    'id' => 6, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 6, 'observatii' => '',
                ],
                
                [
                    'id' => 7, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 7, 'observatii' => '',
                ],
                
                [
                    'id' => 8, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 8, 'observatii' => '',
                ],
                
                [
                    'id' => 9, 'department_id' => '14', 'interval_id' => 1 , 'car_id' => 9, 'observatii' => '',
                ],
                
                [
                    'id' => 10, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 10, 'observatii' => 'Nu a circulat',
                ],
                
                [
                    'id' => 11, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 11, 'observatii' => '',
                ],
                
                [
                    'id' => 12, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 12, 'observatii' => '',
                ],
                
                [
                    'id' => 13, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 13, 'observatii' => '',
                ],
                
                [
                    'id' => 14, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 14, 'observatii' => '',
                ],
                
                [
                    'id' => 15, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 15, 'observatii' => '',
                ],
                
                [
                    'id' => 16, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 16, 'observatii' => '',
                ],
                
                [
                    'id' => 17, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 17, 'observatii' => '',
                ],
                
                [
                    'id' => 18, 'department_id' => '7', 'interval_id' => 1 , 'car_id' => 18, 'observatii' => '',
                ],
                
                [
                    'id' => 19, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 19, 'observatii' => '',
                ],
                
                [
                    'id' => 20, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 20, 'observatii' => 'A fost la achizitii la Sotir',
                ],
                
                [
                    'id' => 21, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 21, 'observatii' => '',
                ],
                
                [
                    'id' => 22, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 22, 'observatii' => '',
                ],
                
                [
                    'id' => 23, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 23, 'observatii' => '',
                ],
                
                [
                    'id' => 24, 'department_id' => '2', 'interval_id' => 1 , 'car_id' => 24, 'observatii' => '',
                ],
                
                [
                    'id' => 25, 'department_id' => '14', 'interval_id' => 1 , 'car_id' => 25, 'observatii' => '',
                ],
                
                [
                    'id' => 26, 'department_id' => '13', 'interval_id' => 1 , 'car_id' => 26, 'observatii' => '',
                ],
                
                [
                    'id' => 27, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 27, 'observatii' => '',
                ],
                
                [
                    'id' => 28, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 28, 'observatii' => '',
                ],
                
                [
                    'id' => 29, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 29, 'observatii' => '',
                ],
                
                [
                    'id' => 30, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 30, 'observatii' => '',
                ],
                
                [
                    'id' => 31, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 31, 'observatii' => '',
                ],
                
                [
                    'id' => 32, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 32, 'observatii' => '',
                ],
                
                [
                    'id' => 33, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 33, 'observatii' => '',
                ],
                
                [
                    'id' => 34, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 34, 'observatii' => '',
                ],
                
                [
                    'id' => 35, 'department_id' => '12', 'interval_id' => 1 , 'car_id' => 35, 'observatii' => '',
                ],
                
                [
                    'id' => 36, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 36, 'observatii' => 'Daniel Bitire',
                ],
                
                [
                    'id' => 37, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 37, 'observatii' => '',
                ],
                
                [
                    'id' => 38, 'department_id' => '12', 'interval_id' => 1 , 'car_id' => 38, 'observatii' => '',
                ],
                
                [
                    'id' => 39, 'department_id' => '7', 'interval_id' => 1 , 'car_id' => 39, 'observatii' => '',
                ],
                
                [
                    'id' => 40, 'department_id' => '7', 'interval_id' => 1 , 'car_id' => 40, 'observatii' => '',
                ],
                
                [
                    'id' => 41, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 41, 'observatii' => '',
                ],
                
                [
                    'id' => 42, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 42, 'observatii' => '',
                ],
                
                [
                    'id' => 43, 'department_id' => '7', 'interval_id' => 1 , 'car_id' => 43, 'observatii' => '',
                ],
                
                [
                    'id' => 44, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 44, 'observatii' => '',
                ],
                
                [
                    'id' => 45, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 45, 'observatii' => '',
                ],
                
                [
                    'id' => 46, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 46, 'observatii' => '',
                ],
                
                [
                    'id' => 47, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 47, 'observatii' => '',
                ],
                
                [
                    'id' => 48, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 48, 'observatii' => 'Este in garaj',
                ],
                
                [
                    'id' => 49, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 49, 'observatii' => '',
                ],
                
                [
                    'id' => 50, 'department_id' => '14', 'interval_id' => 1 , 'car_id' => 50, 'observatii' => '',
                ],
                
                [
                    'id' => 51, 'department_id' => '13', 'interval_id' => 1 , 'car_id' => 51, 'observatii' => '',
                ],
                
                [
                    'id' => 52, 'department_id' => '8', 'interval_id' => 1 , 'car_id' => 52, 'observatii' => '',
                ],
                
                [
                    'id' => 53, 'department_id' => '13', 'interval_id' => 1 , 'car_id' => 53, 'observatii' => '',
                ],
                
                [
                    'id' => 54, 'department_id' => '11', 'interval_id' => 1 , 'car_id' => 54, 'observatii' => '',
                ],
                
                [
                    'id' => 55, 'department_id' => '5', 'interval_id' => 1 , 'car_id' => 55, 'observatii' => '',
                ],
                
                [
                    'id' => 56, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 56, 'observatii' => '',
                ],
                
                [
                    'id' => 57, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 57, 'observatii' => '',
                ],
                
                [
                    'id' => 58, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 58, 'observatii' => '',
                ],
                
                [
                    'id' => 59, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 59, 'observatii' => '',
                ],
                
                [
                    'id' => 60, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 60, 'observatii' => '',
                ],
                
                [
                    'id' => 61, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 61, 'observatii' => 'In service',
                ],
                
                [
                    'id' => 62, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 62, 'observatii' => '',
                ],
                
                [
                    'id' => 63, 'department_id' => '12', 'interval_id' => 1 , 'car_id' => 63, 'observatii' => '',
                ],
                
                [
                    'id' => 64, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 64, 'observatii' => 'Defecta - la vanzare',
                ],
                
                [
                    'id' => 65, 'department_id' => '5', 'interval_id' => 1 , 'car_id' => 65, 'observatii' => '',
                ],
                
                [
                    'id' => 66, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 66, 'observatii' => '',
                ],
                
                [
                    'id' => 67, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 67, 'observatii' => 'Harhata Ionut-Ciprian',
                ],
                
                [
                    'id' => 68, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 68, 'observatii' => '',
                ],
                
                [
                    'id' => 69, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 69, 'observatii' => '',
                ],
                
                [
                    'id' => 70, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 70, 'observatii' => '',
                ],
                
                [
                    'id' => 71, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 71, 'observatii' => '',
                ],
                
                [
                    'id' => 72, 'department_id' => '11', 'interval_id' => 1 , 'car_id' => 72, 'observatii' => '',
                ],
                
                [
                    'id' => 73, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 73, 'observatii' => '',
                ],
                
                [
                    'id' => 74, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 74, 'observatii' => '',
                ],
                
                [
                    'id' => 75, 'department_id' => '12', 'interval_id' => 1 , 'car_id' => 75, 'observatii' => '',
                ],
                
                [
                    'id' => 76, 'department_id' => '14', 'interval_id' => 1 , 'car_id' => 76, 'observatii' => 'Sef depozit Otopeni - rezerva',
                ],
                
                [
                    'id' => 77, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 77, 'observatii' => '',
                ],
                
                [
                    'id' => 78, 'department_id' => '15', 'interval_id' => 1 , 'car_id' => 78, 'observatii' => '',
                ],
                
                [
                    'id' => 79, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 79, 'observatii' => 'Va fi trecuta la Timisoara di',
                ],
                
                [
                    'id' => 80, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 80, 'observatii' => '',
                ],
                
                [
                    'id' => 81, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 81, 'observatii' => '',
                ],
                
                [
                    'id' => 82, 'department_id' => '12', 'interval_id' => 1 , 'car_id' => 82, 'observatii' => '',
                ],
                
                [
                    'id' => 83, 'department_id' => '11', 'interval_id' => 1 , 'car_id' => 83, 'observatii' => '',
                ],
                
                [
                    'id' => 84, 'department_id' => '8', 'interval_id' => 1 , 'car_id' => 84, 'observatii' => '',
                ],
                
                [
                    'id' => 85, 'department_id' => '5', 'interval_id' => 1 , 'car_id' => 85, 'observatii' => '',
                ],
                
                [
                    'id' => 86, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 86, 'observatii' => '',
                ],
                
                [
                    'id' => 87, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 87, 'observatii' => '',
                ],
                
                [
                    'id' => 88, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 88, 'observatii' => '',
                ],
                
                [
                    'id' => 89, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 89, 'observatii' => '',
                ],
                
                [
                    'id' => 90, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 90, 'observatii' => '',
                ],
                
                [
                    'id' => 91, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 91, 'observatii' => '',
                ],
                
                [
                    'id' => 92, 'department_id' => '13', 'interval_id' => 1 , 'car_id' => 92, 'observatii' => '',
                ],
                
                [
                    'id' => 93, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 93, 'observatii' => 'Nu merge',
                ],
                
                [
                    'id' => 94, 'department_id' => '11', 'interval_id' => 1 , 'car_id' => 94, 'observatii' => '',
                ],
                
                [
                    'id' => 95, 'department_id' => '5', 'interval_id' => 1 , 'car_id' => 95, 'observatii' => 'Libera',
                ],
                
                [
                    'id' => 96, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 96, 'observatii' => '',
                ],
                
                [
                    'id' => 97, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 97, 'observatii' => '',
                ],
                
                [
                    'id' => 98, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 98, 'observatii' => 'Hub  Bucuresti - rezerva',
                ],
                
                [
                    'id' => 99, 'department_id' => '7', 'interval_id' => 1 , 'car_id' => 99, 'observatii' => '',
                ],
                
                [
                    'id' => 100, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 100, 'observatii' => '',
                ],
                
                [
                    'id' => 101, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 101, 'observatii' => '',
                ],
                
                [
                    'id' => 102, 'department_id' => '12', 'interval_id' => 1 , 'car_id' => 102, 'observatii' => '',
                ],
                
                [
                    'id' => 103, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 103, 'observatii' => '',
                ],
                
                [
                    'id' => 104, 'department_id' => '14', 'interval_id' => 1 , 'car_id' => 104, 'observatii' => '',
                ],
                
                [
                    'id' => 105, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 105, 'observatii' => '',
                ],
                
                [
                    'id' => 106, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 106, 'observatii' => '',
                ],
                
                [
                    'id' => 107, 'department_id' => '15', 'interval_id' => 1 , 'car_id' => 107, 'observatii' => '',
                ],
                
                [
                    'id' => 108, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 108, 'observatii' => '',
                ],
                
                [
                    'id' => 109, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 109, 'observatii' => '',
                ],
                
                [
                    'id' => 110, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 110, 'observatii' => '',
                ],
                
                [
                    'id' => 111, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 111, 'observatii' => '',
                ],
                
                [
                    'id' => 112, 'department_id' => '12', 'interval_id' => 1 , 'car_id' => 112, 'observatii' => 'Libera',
                ],
                
                [
                    'id' => 113, 'department_id' => '14', 'interval_id' => 1 , 'car_id' => 113, 'observatii' => '',
                ],
                
                [
                    'id' => 114, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 114, 'observatii' => '',
                ],
                
                [
                    'id' => 115, 'department_id' => '14', 'interval_id' => 1 , 'car_id' => 115, 'observatii' => '',
                ],
                
                [
                    'id' => 116, 'department_id' => '14', 'interval_id' => 1 , 'car_id' => 116, 'observatii' => '',
                ],
                
                [
                    'id' => 117, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 117, 'observatii' => '',
                ],
                
                [
                    'id' => 118, 'department_id' => '13', 'interval_id' => 1 , 'car_id' => 118, 'observatii' => '',
                ],
                
                [
                    'id' => 119, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 119, 'observatii' => '',
                ],
                
                [
                    'id' => 120, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 120, 'observatii' => '',
                ],
                
                [
                    'id' => 121, 'department_id' => '4', 'interval_id' => 1 , 'car_id' => 121, 'observatii' => '',
                ],
                
                [
                    'id' => 122, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 122, 'observatii' => '',
                ],
                
                [
                    'id' => 123, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 123, 'observatii' => 'B038682',
                ],
                
                [
                    'id' => 124, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 124, 'observatii' => '',
                ],
                
                [
                    'id' => 125, 'department_id' => '9', 'interval_id' => 1 , 'car_id' => 125, 'observatii' => '',
                ],
                
                [
                    'id' => 126, 'department_id' => '5', 'interval_id' => 1 , 'car_id' => 126, 'observatii' => '',
                ],
                
                [
                    'id' => 127, 'department_id' => '5', 'interval_id' => 1 , 'car_id' => 127, 'observatii' => '',
                ],
                
                [
                    'id' => 128, 'department_id' => '5', 'interval_id' => 1 , 'car_id' => 128, 'observatii' => 'Se va scoate',
                ],
                
                [
                    'id' => 129, 'department_id' => '1', 'interval_id' => 1 , 'car_id' => 129, 'observatii' => '',
                ],
                
                [
                    'id' => 130, 'department_id' => '7', 'interval_id' => 1 , 'car_id' => 130, 'observatii' => '',
                ],
                
                [
                    'id' => 131, 'department_id' => '7', 'interval_id' => 1 , 'car_id' => 131, 'observatii' => '',
                ],
                
                [
                    'id' => 132, 'department_id' => '11', 'interval_id' => 1 , 'car_id' => 132, 'observatii' => '',
                ],
                
                [
                    'id' => 133, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 133, 'observatii' => '',
                ],
                
                [
                    'id' => 134, 'department_id' => '3', 'interval_id' => 1 , 'car_id' => 134, 'observatii' => '',
                ],
                
                [
                    'id' => 135, 'department_id' => '7', 'interval_id' => 1 , 'car_id' => 135, 'observatii' => '',
                ],
                
                [
                    'id' => 136, 'department_id' => '2', 'interval_id' => 1 , 'car_id' => 136, 'observatii' => 'Posibil la Adriana Florea',
                ],
                
                [
                    'id' => 137, 'department_id' => '16', 'interval_id' => 1 , 'car_id' => 137, 'observatii' => 'Ilie Roxana',
                ],
                
                [
                    'id' => 138, 'department_id' => '10', 'interval_id' => 1 , 'car_id' => 138, 'observatii' => '',
                ],                                        
            )            
        )->count(138)->create();
        
                

    }

}
