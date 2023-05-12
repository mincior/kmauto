<?php

namespace Database\Seeders;

use App\Models\CarAsig;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarAsigsTableSeeder extends Seeder
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
        $brands = CarAsig::factory()->state(
            new Sequence(
            
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '7', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '8', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '10', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '11', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '12', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '13', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '14', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '15', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '16', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '17', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '18', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '19', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '20', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '21', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '22', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '23', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '24', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '25', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '26', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '27', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '28', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '4',  'interval_id' => '1',  'car_id' => '29', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '30', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '31', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '32', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '33', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '34', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '35', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '36', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '37', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '38', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '39', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '40', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '41', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '42', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '43', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '44', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '45', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '46', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '47', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '48', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '49', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '50', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '51', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '52', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '53', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '54', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '55', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '56', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '57', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '58', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '59', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '60', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '61', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '62', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '63', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '64', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '65', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '66', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '67', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '68', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '69', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '70', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '71', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '72', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '73', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '4',  'interval_id' => '1',  'car_id' => '74', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '75', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '76', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '77', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '78', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '79', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '80', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '81', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '82', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '83', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '84', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '85', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '86', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '87', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '88', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '89', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '90', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '91', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '92', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '93', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '94', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '95', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '96', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '97', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '98', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '99', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '100', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '101', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '102', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '103', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '104', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '105', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '106', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '107', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '108', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '109', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '110', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '111', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '112', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '3',  'interval_id' => '1',  'car_id' => '113', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '114', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '115', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '116', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '117', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '118', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '119', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '120', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '4',  'interval_id' => '1',  'car_id' => '121', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '122', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '123', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '124', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '125', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '126', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '127', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '128', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '129', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '130', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '131', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '132', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '133', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '134', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '5',  'interval_id' => '1',  'car_id' => '135', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '4',  'interval_id' => '1',  'car_id' => '136', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '137', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '138', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '139', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '140', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '141', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '142', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '143', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '144', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '145', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '146', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '147', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '148', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '149', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '150', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '151', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '152', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '153', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '154', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '155', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '156', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '157', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '158', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '159', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '160', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '161', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '162', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '163', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '164', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '165', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '166', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '167', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '168', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '169', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '170', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '1',  'car_id' => '171', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '172', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '173', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '174', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '175', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '176', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '177', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '178', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '179', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '180', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '181', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '182', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '183', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '184', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '185', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '186', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '187', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '188', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '189', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '190', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '191', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '192', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '193', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '194', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '195', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '196', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '197', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '198', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '199', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '200', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '201', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '202', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '203', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '204', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '205', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '206', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '207', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '208', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '209', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '210', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '211', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '212', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '213', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '214', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '215', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '216', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '2',  'interval_id' => '1',  'car_id' => '217', 
				],
                
            )            
        )->count(217)->create();      

    }

}
