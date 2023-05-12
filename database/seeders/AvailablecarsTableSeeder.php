<?php

namespace Database\Seeders;

use App\Models\Availablecar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class AvailablecarsTableSeeder extends Seeder
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
        $brands = Availablecar::factory()->state(
            new Sequence(
            
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '1', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '2', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '3', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '4', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '5', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '6', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '7', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '8', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '9', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '10', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '11', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '12', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '13', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '14', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '15', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '16', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '17', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '18', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '19', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '20', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '21', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '22', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '23', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '24', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '25', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '26', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '27', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '28', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '29', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '30', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '31', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '32', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '33', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '34', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '35', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '36', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '37', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '38', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '39', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '40', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '41', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '42', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '43', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '44', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '45', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '46', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '47', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '48', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '49', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '50', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '51', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '52', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '53', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '54', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '55', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '56', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '57', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '58', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '59', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '60', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '61', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '62', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '63', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '64', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '65', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '66', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '67', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '68', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '69', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '70', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '71', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '72', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '73', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '74', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '75', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '76', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '77', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '78', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '79', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '80', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '81', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '82', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '83', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '84', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '85', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '86', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '87', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '88', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '89', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '90', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '91', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '92', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '93', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '94', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '95', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '96', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '97', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '98', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '99', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '100', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '101', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '102', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '103', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '104', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '105', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '106', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '107', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '108', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '109', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '110', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '111', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '112', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '113', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '114', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '115', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '116', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '117', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '118', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '119', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '120', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '121', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '122', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '123', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '124', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '125', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '126', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '127', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '128', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '129', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '130', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '131', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '132', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '133', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '134', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '135', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '136', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '137', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '138', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '139', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '140', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '141', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '142', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '143', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '144', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '145', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '146', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '147', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '148', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '149', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '150', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '151', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '152', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '153', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '154', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '155', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '156', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '157', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '158', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '159', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '160', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '161', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '162', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '163', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '164', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '165', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '166', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '167', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '168', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '169', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '170', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '171', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '172', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '173', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '174', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '175', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '176', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '177', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '178', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '179', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '180', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '181', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '182', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '183', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '184', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '185', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '186', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '187', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '188', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '189', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '190', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '191', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '192', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '193', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '194', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '195', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '196', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '197', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '198', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '199', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '200', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '201', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '202', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '203', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '204', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '205', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '206', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '207', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '208', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '209', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '210', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '211', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '212', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '213', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '214', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '215', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '216', 
				],
				[
					 'valoare' => '1',  'interval_id' => '1',  'car_id' => '217', 
				],
                
            )            
        )->count(217)->create();      

    }

}
