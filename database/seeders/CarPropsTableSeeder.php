<?php

namespace Database\Seeders;

use App\Models\CarProp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarPropsTableSeeder extends Seeder
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
        $brands = CarProp::factory()->state(
            new Sequence(
            
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '1',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '2',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '3',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '4',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '5',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '6',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '7',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '8',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '9',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '10',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '11',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '12',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '13',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '14',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '15',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '16',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '17',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '18',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '19',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '20',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '21',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '22',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '23',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '24',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '25',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '26',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '27',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '28',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '29',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '30',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '31',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '32',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '33',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '34',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '35',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '36',  'car_prop_value_id' => '5', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '37',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '38',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '39',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '40',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '41',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '42',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '43',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '44',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '45',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '46',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '47',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '48',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '49',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '50',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '51',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '52',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '53',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '54',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '55',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '56',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '57',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '58',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '59',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '60',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '61',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '62',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '63',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '64',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '65',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '66',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '67',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '68',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '69',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '70',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '71',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '72',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '73',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '74',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '75',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '76',  'car_prop_value_id' => '7', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '77',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '78',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '79',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '80',  'car_prop_value_id' => '7', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '81',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '82',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '83',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '84',  'car_prop_value_id' => '8', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '85',  'car_prop_value_id' => '8', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '86',  'car_prop_value_id' => '8', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '87',  'car_prop_value_id' => '8', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '88',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '89',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '90',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '91',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '92',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '93',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '94',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '95',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '96',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '97',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '98',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '99',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '100',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '101',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '102',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '103',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '104',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '105',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '106',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '107',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '108',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '109',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '110',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '111',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '112',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '113',  'car_prop_value_id' => '8', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '114',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '115',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '116',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '117',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '118',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '119',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '120',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '121',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '122',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '123',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '124',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '125',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '126',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '127',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '128',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '129',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '130',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '131',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '132',  'car_prop_value_id' => '2', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '133',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '134',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '135',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '136',  'car_prop_value_id' => '7', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '137',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '138',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '139',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '140',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '141',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '142',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '143',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '144',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '145',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '146',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '147',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '148',  'car_prop_value_id' => '6', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '149',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '150',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '151',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '152',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '153',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '154',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '155',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '156',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '157',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '158',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '159',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '160',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '161',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '162',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '163',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '164',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '165',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '166',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '167',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '168',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '169',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '170',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '171',  'car_prop_value_id' => '1', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '172',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '173',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '174',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '175',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '176',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '177',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '178',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '179',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '180',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '181',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '182',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '183',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '184',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '185',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '186',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '187',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '188',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '189',  'car_prop_value_id' => '9', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '190', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '191',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '192',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '193',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '194',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '195',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '196',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '197',  'car_prop_value_id' => '4', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '198', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '199', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '200', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '201', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '202', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '203',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '204',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '205',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '206',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '207',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '208',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '209',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '210',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '211',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '212',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '213',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '214',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '215',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '216',  'car_prop_value_id' => '3', 
				],
				[
					 'observatii' => 'Nu sunt',  'interval_id' => '1',  'car_id' => '217',  'car_prop_value_id' => '3', 
				],
                
            )            
        )->count(217)->create();      

    }

}
