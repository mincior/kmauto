<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\CarStat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarStatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy customers
        $this->generate();
    }

        /**
     
     * 
     * @return void     
     */
    private function generate()
    {
        $users = CarStat::factory()->state(
            new Sequence(
                [
                    'id' => '1', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '1', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '2', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '2', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '3', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '3', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '4', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '4', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '5', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '5', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '6', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '6', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '7', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '7', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '8', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '8', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '9', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '9', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '10', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '10', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '11', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '11', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '12', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '12', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '13', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '13', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '14', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '14', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '15', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '15', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '16', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '16', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '17', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '17', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '18', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '18', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '19', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '19', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '20', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '20', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '21', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '21', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '22', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '22', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '23', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '23', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '24', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '24', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '25', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '25', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '26', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '26', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '27', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '27', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '28', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '28', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '29', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '29', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '30', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '30', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '31', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '31', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '32', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '32', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '33', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '33', 	'car_stat_value_id' => '2', 
                ],
                [
                    'id' => '34', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '34', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '35', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '35', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '36', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '36', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '37', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '37', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '38', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '38', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '39', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '39', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '40', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '40', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '41', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '41', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '42', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '42', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '43', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '43', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '44', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '44', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '45', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '45', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '46', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '46', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '47', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '47', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '48', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '48', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '49', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '49', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '50', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '50', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '51', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '51', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '52', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '52', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '53', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '53', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '54', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '54', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '55', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '55', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '56', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '56', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '57', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '57', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '58', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '58', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '59', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '59', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '60', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '60', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '61', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '61', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '62', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '62', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '63', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '63', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '64', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '64', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '65', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '65', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '66', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '66', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '67', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '67', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '68', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '68', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '69', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '69', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '70', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '70', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '71', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '71', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '72', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '72', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '73', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '73', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '74', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '74', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '75', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '75', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '76', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '76', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '77', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '77', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '78', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '78', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '79', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '79', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '80', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '80', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '81', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '81', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '82', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '82', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '83', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '83', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '84', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '84', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '85', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '85', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '86', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '86', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '87', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '87', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '88', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '88', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '89', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '89', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '90', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '90', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '91', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '91', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '92', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '92', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '93', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '93', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '94', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '94', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '95', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '95', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '96', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '96', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '97', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '97', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '98', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '98', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '99', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '99', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '100', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '100', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '101', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '101', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '102', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '102', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '103', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '103', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '104', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '104', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '105', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '105', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '106', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '106', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '107', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '107', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '108', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '108', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '109', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '109', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '110', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '110', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '111', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '111', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '112', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '112', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '113', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '113', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '114', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '114', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '115', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '115', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '116', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '116', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '117', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '117', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '118', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '118', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '119', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '119', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '120', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '120', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '121', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '121', 	'car_stat_value_id' => '1', 
                ],
                [
                    'id' => '122', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '122', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '123', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '123', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '124', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '124', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '125', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '125', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '126', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '126', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '127', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '127', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '128', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '128', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '129', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '129', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '130', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '130', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '131', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '131', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '132', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '132', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '133', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '133', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '134', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '134', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '135', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '135', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '136', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '136', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '137', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '137', 	'car_stat_value_id' => '3', 
                ],
                [
                    'id' => '138', 	'observatii' => 'Nu sunt', 	'interval_id' => '1', 	'car_id' => '138', 	'car_stat_value_id' => '3', 
                ],
                                
            )            
        )->count(138)->create();
        
                

    }

}
