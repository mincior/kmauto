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
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '2',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '3',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '4',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '5',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '6',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '7',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '8',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '9',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '10',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '11',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '12',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '13',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '14',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '15',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '16',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '17',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '18',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '19',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '20',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '21',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '22',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '23',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '24',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '25',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '26',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '27',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '28',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '29',  'car_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '30',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '31',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '32',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '33',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '34',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '35',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '36',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '37',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '38',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '39',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '40',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '41',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '42',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '43',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '44',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '45',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '46',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '47',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '48',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '49',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '50',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '51',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '52',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '53',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '54',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '55',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '56',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '57',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '58',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '59',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '60',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '61',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '62',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '63',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '64',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '65',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '66',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '67',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '68',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '69',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '70',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '71',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '72',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '73',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '74',  'car_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '75',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '76',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '77',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '78',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '79',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '80',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '81',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '82',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '83',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '84',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '85',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '86',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '87',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '88',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '89',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '90',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '91',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '92',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '93',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '94',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '95',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '96',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '97',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '98',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '99',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '100',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '101',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '102',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '103',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '104',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '105',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '106',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '107',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '108',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '109',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '110',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '111',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '112',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '113',  'car_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '114',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '115',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '116',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '117',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '118',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '119',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '120',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '121',  'car_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '122',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '123',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '124',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '125',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '126',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '127',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '128',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '129',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '130',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '131',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '132',  'car_id' => '0', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '133',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '134',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '135',  'car_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '136',  'car_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '137',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '138',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '139',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '140',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '141',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '142',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '143',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '144',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '145',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '146',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '147',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '148',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '149',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '150',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '151',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '152',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '153',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '154',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '155',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '156',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '157',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '158',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '159',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '160',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '161',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '162',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '163',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '164',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '165',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '166',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '167',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '168',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '169',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '170',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '171',  'car_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '172',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '173',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '174',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '175',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '176',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '177',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '178',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '179',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '180',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '181',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '182',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '183',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '184',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '185',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '186',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '187',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '188',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '189',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '190',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '191',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '192',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '193',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '194',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '195',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '196',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '197',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '198',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '199',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '200',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '201',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '202',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '203',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '204',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '205',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '206',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '207',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '208',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '209',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '210',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '211',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '212',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '213',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '214',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '215',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '216',  'car_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'car_asig_value_id' => '1',  'interval_id' => '217',  'car_id' => '2', 
				],
                
            )            
        )->count(217)->create();      

    }

}
