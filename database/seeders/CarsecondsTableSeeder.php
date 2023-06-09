<?php

namespace Database\Seeders;


use App\Models\Car;
use App\Models\Carsecond;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarsecondsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->generate();
        // $this->generateRandomUsers();
    }

    /**
     
     * 
     * @return void     
     */
    private function generate()
    {
        //https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-20-04
        //https://www.hostinger.com/tutorials/how-to-install-and-setup-phpmyadmin-on-ubuntu
        $users = Carsecond::factory()->state(
            new Sequence(
              [
                     'id' => '1', 	'nr_identificare' => 'VF37C9HN0CJ686735', 	'caroseria' => 'BB Furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '55', 	'mtma' => '2160', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '1', 	'frame_id' => '1', 
              ],
              [
                     'id' => '2', 	'nr_identificare' => 'VF37C9HN0CJ686734', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-06-17', 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '55', 	'mtma' => '2160', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '2', 	'frame_id' => '1', 
              ],
              [
                     'id' => '3', 	'nr_identificare' => 'VF37C9HN0CN528466', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '55', 	'mtma' => '1935', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '3', 	'frame_id' => '1', 
              ],
              [
                     'id' => '4', 	'nr_identificare' => 'VF37A9HN0DN545222', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2013', 	'poluare' => '6', 	'p_kw' => '55', 	'mtma' => '2160', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '4', 	'frame_id' => '1', 
              ],
              [
                     'id' => '5', 	'nr_identificare' => 'WF0NXXGCHNKM74653', 	'caroseria' => 'AB berlina cu hayon', 	 	 	'an_fabr' => '2019', 	 	 	 	 	 	 	 	'car_id' => '5', 	'frame_id' => '2', 
              ],
              [
                     'id' => '6', 	'nr_identificare' => 'WF0NXXGCHNKM78050', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2020-08-04', 	'an_fabr' => '2019', 	 	 	 	 	 	 	 	'car_id' => '6', 	'frame_id' => '2', 
              ],
              [
                     'id' => '7', 	'nr_identificare' => 'WF0NXXGCHNKM78841', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-04-19', 	'an_fabr' => '2019', 	 	 	 	 	 	 	 	'car_id' => '7', 	'frame_id' => '2', 
              ],
              [
                     'id' => '8', 	'nr_identificare' => 'VF38DRHHAEL042417', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2011', 	'poluare' => '5', 	'p_kw' => '103', 	'mtma' => '2065', 	'cap_cyl' => '1997', 	'cap_rez' => '55', 	 	 	'car_id' => '8', 	'frame_id' => '3', 
              ],
              [
                     'id' => '9', 	'nr_identificare' => 'VF34C9HR8CS149511', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	 	 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '82', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '9', 	'frame_id' => '4', 
              ],
              [
                     'id' => '10', 	'nr_identificare' => 'VF34C9HD8DS097386', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	 	 	'an_fabr' => '2013', 	'poluare' => '5', 	'p_kw' => '84', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '10', 	'frame_id' => '4', 
              ],
              [
                     'id' => '11', 	'nr_identificare' => 'VF34C9HR8CS149505', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	 	 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '82', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '11', 	'frame_id' => '4', 
              ],
              [
                     'id' => '12', 	'nr_identificare' => 'VF34C9HD8DS096100', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	 	'recep_auto' => '2020-11-25', 	'an_fabr' => '2013', 	'poluare' => '5', 	'p_kw' => '84', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '12', 	'frame_id' => '4', 
              ],
              [
                     'id' => '13', 	'nr_identificare' => 'VF3YD2MFC12C66858', 	'caroseria' => 'BB furgon', 	 	 	'an_fabr' => '2016', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1997', 	'cap_rez' => '90', 	 	 	'car_id' => '13', 	'frame_id' => '1', 
              ],
              [
                     'id' => '14', 	'nr_identificare' => 'TMBJJ7NE2K0147907', 	'caroseria' => 'Combi', 	'are_gps' => '1', 	'recep_auto' => '2022-08-16', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1950', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	'auto_inloc' => 'Nu', 	'km_contract' => '120', 	'car_id' => '14', 	'frame_id' => '5', 
              ],
              [
                     'id' => '15', 	'nr_identificare' => 'TMBAJ7NE6K0154097', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-05-27', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1923', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	'auto_inloc' => 'Nu', 	'km_contract' => '120', 	'car_id' => '15', 	'frame_id' => '3', 
              ],
              [
                     'id' => '16', 	'nr_identificare' => 'TMBAJ7NE5L0065008', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2023-04-20', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1923', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	'auto_inloc' => 'Nu', 	'km_contract' => '120', 	'car_id' => '16', 	'frame_id' => '3', 
              ],
              [
                     'id' => '17', 	'nr_identificare' => 'VF37A9HN0EN521737', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2013', 	'poluare' => '6', 	'p_kw' => '55', 	'mtma' => '2160', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '17', 	'frame_id' => '1', 
              ],
              [
                     'id' => '18', 	'nr_identificare' => 'VF3YC2MFC12D75755', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1997', 	'cap_rez' => '90', 	 	 	'car_id' => '18', 	'frame_id' => '1', 
              ],
              [
                     'id' => '19', 	'nr_identificare' => 'WF0DXXTTGDEM60421', 	'caroseria' => 'Plat cu prelata', 	'are_gps' => '1', 	 	'an_fabr' => '2014', 	'poluare' => '5', 	'p_kw' => '92', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '80', 	 	 	'car_id' => '19', 	'frame_id' => '6', 
              ],
              [
                     'id' => '20', 	'nr_identificare' => 'WF0XXXTTGXJL72279', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-04-01', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '80', 	 	 	'car_id' => '20', 	'frame_id' => '1', 
              ],
              [
                     'id' => '21', 	'nr_identificare' => 'VF3YD2MFC12H22198', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2023-02-27', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1997', 	'cap_rez' => '90', 	 	 	'car_id' => '21', 	'frame_id' => '1', 
              ],
              [
                     'id' => '22', 	'nr_identificare' => 'WF0EXXTTREKS16598', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-04-06', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '22', 	'frame_id' => '1', 
              ],
              [
                     'id' => '23', 	'nr_identificare' => 'WF0EXXTTREKM22750', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-05-06', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '23', 	'frame_id' => '1', 
              ],
              [
                     'id' => '24', 	'nr_identificare' => 'WF0DXXTTGDJL69470', 	'caroseria' => 'BA06 cu prelata', 	'are_gps' => '1', 	 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '80', 	 	 	'car_id' => '24', 	'frame_id' => '7', 
              ],
              [
                     'id' => '25', 	'nr_identificare' => 'WF0DXXTTGDFY07375', 	'caroseria' => 'Plat cu prelata', 	'are_gps' => '1', 	 	'an_fabr' => '2016', 	'poluare' => '5', 	'p_kw' => '92', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '80', 	 	 	'car_id' => '25', 	'frame_id' => '6', 
              ],
              [
                     'id' => '26', 	'nr_identificare' => '1J4FAN9P9YP730510', 	'caroseria' => 'AE cabriolet', 	 	 	'an_fabr' => '2000', 	'poluare' => '2', 	'p_kw' => '87', 	'mtma' => '1925', 	'cap_cyl' => '2464', 	'cap_rez' => '72', 	 	 	'car_id' => '26', 	'frame_id' => '8', 
              ],
              [
                     'id' => '27', 	'nr_identificare' => 'WF0DXXTTGDFD31909', 	'caroseria' => 'Plat cu prelata', 	'are_gps' => '1', 	 	'an_fabr' => '2015', 	'poluare' => '5', 	'p_kw' => '92', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '80', 	 	 	'car_id' => '27', 	'frame_id' => '6', 
              ],
              [
                     'id' => '28', 	'nr_identificare' => 'WF0DXXTTGDFU01028', 	'caroseria' => 'BA06 cu prelata', 	'are_gps' => '1', 	 	'an_fabr' => '2015', 	'poluare' => '5', 	'p_kw' => '92', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '80', 	 	 	'car_id' => '28', 	'frame_id' => '7', 
              ],
              [
                     'id' => '29', 	'nr_identificare' => 'WP1ZZZ9YZKDA00257', 	'caroseria' => 'AC break', 	 	 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '250', 	'mtma' => '2060', 	'cap_cyl' => '2995', 	'cap_rez' => '90', 	 	 	'car_id' => '29', 	'frame_id' => '9', 
              ],
              [
                     'id' => '30', 	'nr_identificare' => 'WAUZZZ4G9BN018640', 	'caroseria' => 'AB berlina cu hayon', 	 	 	'an_fabr' => '2011', 	'poluare' => '5', 	'p_kw' => '180', 	'mtma' => '2335', 	'cap_cyl' => '2967', 	'cap_rez' => '75', 	 	 	'car_id' => '30', 	'frame_id' => '2', 
              ],
              [
                     'id' => '31', 	'nr_identificare' => 'WDD2173641A035490', 	'caroseria' => 'AD cupeu', 	 	 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '270', 	'mtma' => '2555', 	'cap_cyl' => '2996', 	'cap_rez' => '80', 	 	 	'car_id' => '31', 	'frame_id' => '10', 
              ],
              [
                     'id' => '32', 	'nr_identificare' => 'WF0DXXTTGDJL69468', 	'caroseria' => 'BA06 cu prelata', 	'are_gps' => '1', 	 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '80', 	 	 	'car_id' => '32', 	'frame_id' => '7', 
              ],
              [
                     'id' => '33', 	'nr_identificare' => 'VF37C9HN0CN521565', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '55', 	'mtma' => '2160', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '33', 	'frame_id' => '1', 
              ],
              [
                     'id' => '34', 	'nr_identificare' => 'WF0MXXGCHMLB27774', 	'caroseria' => 'SEDAN', 	 	'recep_auto' => '2020-08-17', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1775', 	'cap_cyl' => '1499', 	'cap_rez' => '47', 	 	 	'car_id' => '34', 	'frame_id' => '11', 
              ],
              [
                     'id' => '35', 	'nr_identificare' => 'WF0MXXGCHMKU58067', 	'caroseria' => 'SEDAN', 	 	'recep_auto' => '2020-08-17', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1775', 	'cap_cyl' => '1499', 	'cap_rez' => '47', 	 	 	'car_id' => '35', 	'frame_id' => '11', 
              ],
              [
                     'id' => '36', 	'nr_identificare' => 'SALZA2BN9LH109547', 	'caroseria' => 'AC break', 	 	 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '4490', 	'cap_cyl' => '1999', 	'cap_rez' => '65', 	 	 	'car_id' => '36', 	'frame_id' => '9', 
              ],
              [
                     'id' => '37', 	'nr_identificare' => 'WF0EXXTTREKP40146', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-04-26', 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '90', 	 	 	'car_id' => '37', 	'frame_id' => '1', 
              ],
              [
                     'id' => '38', 	'nr_identificare' => 'WF0EXXTTRELR05184', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2023-01-16', 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1992', 	'cap_rez' => '70', 	 	 	'car_id' => '38', 	'frame_id' => '1', 
              ],
              [
                     'id' => '39', 	'nr_identificare' => 'WF0MXXGCHMLL50909', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2020-10-22', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '39', 	'frame_id' => '3', 
              ],
              [
                     'id' => '40', 	'nr_identificare' => 'WF0MXXGCHMKU58372', 	'caroseria' => 'SEDAN', 	 	'recep_auto' => '2020-08-25', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1775', 	'cap_cyl' => '1499', 	'cap_rez' => '47', 	 	 	'car_id' => '40', 	'frame_id' => '11', 
              ],
              [
                     'id' => '41', 	'nr_identificare' => 'WF0EXXWPCELL57193', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-11-06', 	 	 	 	 	 	 	 	 	'car_id' => '41', 	'frame_id' => '3', 
              ],
              [
                     'id' => '42', 	'nr_identificare' => 'WF0EXXTTRELL53616', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2020-11-24', 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '95.6', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '42', 	'frame_id' => '1', 
              ],
              [
                     'id' => '43', 	'nr_identificare' => 'WF0MXXGCHMLS72071', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-05-27', 	'an_fabr' => '2020', 	 	'p_kw' => '88', 	 	'cap_cyl' => '1499', 	 	 	'km_contract' => '100', 	'car_id' => '43', 	'frame_id' => '3', 
              ],
              [
                     'id' => '44', 	'nr_identificare' => 'WF0MXXGCHMLS72068', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-11-23', 	'an_fabr' => '2020', 	 	'p_kw' => '88', 	 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '44', 	'frame_id' => '3', 
              ],
              [
                     'id' => '45', 	'nr_identificare' => 'WF0MXXGCHMLS82649', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-12-21', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '45', 	'frame_id' => '3', 
              ],
              [
                     'id' => '46', 	'nr_identificare' => 'WF0MXXGCHMLS82648', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-12-21', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '46', 	'frame_id' => '3', 
              ],
              [
                     'id' => '47', 	'nr_identificare' => 'TMBAJ7NE9L0065366', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2020-12-23', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1923', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	'auto_inloc' => 'Nu', 	'km_contract' => '120', 	'car_id' => '47', 	'frame_id' => '3', 
              ],
              [
                     'id' => '48', 	'nr_identificare' => 'VF3DDBHY6HJ636197', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-01-20', 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '73', 	'mtma' => '1590', 	'cap_cyl' => '1560', 	'cap_rez' => '50', 	 	 	'car_id' => '48', 	'frame_id' => '3', 
              ],
              [
                     'id' => '49', 	'nr_identificare' => 'WF0MXXGCHMLS05213', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-01-21', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '49', 	'frame_id' => '3', 
              ],
              [
                     'id' => '50', 	'nr_identificare' => 'WF0MXXGCHMLS04363', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-01-27', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '50', 	'frame_id' => '3', 
              ],
              [
                     'id' => '51', 	'nr_identificare' => 'WF0MXXGCHMLS04718', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-01-27', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '51', 	'frame_id' => '3', 
              ],
              [
                     'id' => '52', 	'nr_identificare' => 'WF0AXXTTRALS05992', 	'caroseria' => 'Plat cu prelata', 	'are_gps' => '1', 	'recep_auto' => '2021-01-28', 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '1999', 	'cap_cyl' => '3500', 	'cap_rez' => '90', 	 	 	'car_id' => '52', 	'frame_id' => '6', 
              ],
              [
                     'id' => '53', 	'nr_identificare' => 'WF0EXXWPCELS16227', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-01-27', 	 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '53', 	'frame_id' => '3', 
              ],
              [
                     'id' => '54', 	'nr_identificare' => 'WF0MXXGCHMLS04957', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-03-26', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '54', 	'frame_id' => '3', 
              ],
              [
                     'id' => '55', 	'nr_identificare' => 'TMBAJ7NX4MY118284', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-03-01', 	'an_fabr' => '2021', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '55', 	'frame_id' => '3', 
              ],
              [
                     'id' => '56', 	'nr_identificare' => 'TMBAJ7NX9MY118037', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-03-03', 	 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '56', 	'frame_id' => '3', 
              ],
              [
                     'id' => '57', 	'nr_identificare' => 'WF0EXXTTRELT41844', 	 	'are_gps' => '1', 	 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '95.6', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '57', 	'frame_id' => '17', 
              ],
              [
                     'id' => '58', 	'nr_identificare' => 'WF0EXXTTRELT41859', 	 	'are_gps' => '1', 	 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '95.6', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '58', 	'frame_id' => '17', 
              ],
              [
                     'id' => '59', 	'nr_identificare' => 'WF0EXXTTRELT41872', 	 	'are_gps' => '1', 	'recep_auto' => '2023-01-16', 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '95.6', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '59', 	'frame_id' => '17', 
              ],
              [
                     'id' => '60', 	'nr_identificare' => 'VF3YD2MFC12H22047', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1997', 	'cap_rez' => '90', 	 	 	'car_id' => '60', 	'frame_id' => '1', 
              ],
              [
                     'id' => '61', 	'nr_identificare' => 'WF0EXXWPCEMU57172', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-03-29', 	'an_fabr' => '2021', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '61', 	'frame_id' => '3', 
              ],
              [
                     'id' => '62', 	'nr_identificare' => 'WF0EXXTTREMJ83815', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-04-19', 	'an_fabr' => '2021', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '95', 	 	 	'car_id' => '62', 	'frame_id' => '1', 
              ],
              [
                     'id' => '63', 	'nr_identificare' => 'WF0EXXTTREMM27538', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-04-19', 	'an_fabr' => '2021', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '95', 	 	 	'car_id' => '63', 	'frame_id' => '1', 
              ],
              [
                     'id' => '64', 	'nr_identificare' => 'WF0EXXTTREMM38463', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-05-06', 	'an_fabr' => '2021', 	'poluare' => '6', 	 	 	'cap_cyl' => '1968', 	'cap_rez' => '90', 	 	 	'car_id' => '64', 	'frame_id' => '1', 
              ],
              [
                     'id' => '65', 	'nr_identificare' => 'VF3DDBHY6HJ598917', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-03-29', 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '73', 	'mtma' => '1590', 	'cap_cyl' => '1560', 	'cap_rez' => '50', 	 	 	'car_id' => '65', 	'frame_id' => '3', 
              ],
              [
                     'id' => '66', 	'nr_identificare' => 'WF0MXXGCHMLS72070', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-07-15', 	'an_fabr' => '2020', 	 	'p_kw' => '88', 	 	'cap_cyl' => '1499', 	 	 	'km_contract' => '100', 	'car_id' => '66', 	'frame_id' => '3', 
              ],
              [
                     'id' => '67', 	'nr_identificare' => 'TMBEP6NJ3MZ084144', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	'recep_auto' => '2021-05-13', 	'an_fabr' => '2021', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '67', 	'frame_id' => '2', 
              ],
              [
                     'id' => '68', 	'nr_identificare' => 'TMBEP6NJXMZ084156', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	'recep_auto' => '2021-08-05', 	'an_fabr' => '2020', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '68', 	'frame_id' => '2', 
              ],
              [
                     'id' => '69', 	'nr_identificare' => 'TMBER7NW5N3014029', 	'caroseria' => 'AC break', 	'are_gps' => '1', 	'recep_auto' => '2021-08-18', 	'an_fabr' => '2021', 	'poluare' => '6', 	'p_kw' => '81', 	'mtma' => '2850', 	'cap_cyl' => '1000', 	'cap_rez' => '60', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '69', 	'frame_id' => '9', 
              ],
              [
                     'id' => '70', 	'nr_identificare' => 'TMBER7NW2N3013033', 	'caroseria' => 'AC break', 	'are_gps' => '1', 	'recep_auto' => '2021-08-18', 	'an_fabr' => '2021', 	'poluare' => '6', 	'p_kw' => '81', 	'mtma' => '2850', 	'cap_cyl' => '1000', 	'cap_rez' => '60', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '70', 	'frame_id' => '9', 
              ],
              [
                     'id' => '71', 	'nr_identificare' => 'TMBER7NW1N3016151', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	 	'an_fabr' => '2021', 	 	'p_kw' => '81', 	 	'cap_cyl' => '1', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '71', 	'frame_id' => '2', 
              ],
              [
                     'id' => '72', 	'nr_identificare' => 'TMBER7NW1N3015095', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	'recep_auto' => '2021-09-13', 	'an_fabr' => '2021', 	 	'p_kw' => '81', 	 	'cap_cyl' => '1', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '72', 	'frame_id' => '2', 
              ],
              [
                     'id' => '73', 	'nr_identificare' => 'WF0PXXGCHPJP24502', 	'caroseria' => 'AC break', 	'are_gps' => '1', 	'recep_auto' => '2022-08-26', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1955', 	'cap_cyl' => '1499', 	'cap_rez' => '47', 	 	 	'car_id' => '73', 	'frame_id' => '9', 
              ],
              [
                     'id' => '74', 	'nr_identificare' => 'TMBAG7NX3MY077094', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-02-26', 	'an_fabr' => '2021', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '74', 	'frame_id' => '3', 
              ],
              [
                     'id' => '75', 	'nr_identificare' => 'TMBER7NW8N3015725', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2023-03-22', 	'an_fabr' => '2021', 	 	'p_kw' => '85', 	 	'cap_cyl' => '1', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '75', 	'frame_id' => '2', 
              ],
              [
                     'id' => '76', 	'nr_identificare' => 'TMBAJ7NXXMY103451', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2023-04-25', 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '110', 	 	'cap_cyl' => '1998', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '76', 	'frame_id' => '3', 
              ],
              [
                     'id' => '77', 	'nr_identificare' => 'TMBER7NW7N3014274', 	'caroseria' => 'AB berlina cu hayon', 	 	 	'an_fabr' => '2021', 	'poluare' => '6', 	'p_kw' => '81', 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '77', 	'frame_id' => '2', 
              ],
              [
                     'id' => '78', 	'nr_identificare' => 'VF34C9HD8DS097384', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	'are_gps' => '1', 	 	'an_fabr' => '2013', 	'poluare' => '5', 	'p_kw' => '84', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '78', 	'frame_id' => '4', 
              ],
              [
                     'id' => '79', 	'nr_identificare' => 'WF0MXXGCHMLL49418', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2022-04-15', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '79', 	'frame_id' => '3', 
              ],
              [
                     'id' => '80', 	'nr_identificare' => 'TMBCP9NP6L7045152', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2023-03-23', 	'an_fabr' => '2020', 	'poluare' => '6', 	'p_kw' => '200', 	'mtma' => '2250', 	'cap_cyl' => '1984', 	'cap_rez' => '66', 	 	 	'car_id' => '80', 	'frame_id' => '3', 
              ],
              [
                     'id' => '81', 	'nr_identificare' => 'TMBER7NW2N3014246', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-05-12', 	 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '81', 	'frame_id' => '2', 
              ],
              [
                     'id' => '82', 	'nr_identificare' => 'TMBER7NW2N3016238', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-06-02', 	'an_fabr' => '2021', 	 	'p_kw' => '85', 	 	'cap_cyl' => '1', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '82', 	'frame_id' => '2', 
              ],
              [
                     'id' => '83', 	'nr_identificare' => 'TMBAJ7NX0MY101353', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2023-01-10', 	'an_fabr' => '2021', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '83', 	'frame_id' => '3', 
              ],
              [
                     'id' => '84', 	'nr_identificare' => 'WF0EXXTTRENT87848', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2022-06-06', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '95.6', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '84', 	'frame_id' => '1', 
              ],
              [
                     'id' => '85', 	'nr_identificare' => 'WF0EXXTTRENT87867', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2022-06-06', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '95.6', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '85', 	'frame_id' => '1', 
              ],
              [
                     'id' => '86', 	'nr_identificare' => 'WF0EXXTTRENS70440', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2022-06-06', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '95.6', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '70', 	 	 	'car_id' => '86', 	'frame_id' => '1', 
              ],
              [
                     'id' => '87', 	'nr_identificare' => 'WF0AXXTTRANT83236', 	'caroseria' => 'BA06 cu prelata', 	'are_gps' => '1', 	 	 	 	 	 	 	 	 	 	'car_id' => '87', 	'frame_id' => '7', 
              ],
              [
                     'id' => '88', 	'nr_identificare' => 'TMBEP6NJ9MZ082835', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	'recep_auto' => '2022-06-21', 	'an_fabr' => '2021', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '88', 	'frame_id' => '2', 
              ],
              [
                     'id' => '89', 	'nr_identificare' => 'TMBEP6NJ3MZ083754', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	'recep_auto' => '2021-08-10', 	'an_fabr' => '2021', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '89', 	'frame_id' => '2', 
              ],
              [
                     'id' => '90', 	'nr_identificare' => 'WF0MXXGCHMLS86832', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '90', 	'frame_id' => '3', 
              ],
              [
                     'id' => '91', 	'nr_identificare' => 'TMBER7NW7N3014260', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-10-03', 	'an_fabr' => '2021', 	'poluare' => '6', 	'p_kw' => '81', 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '91', 	'frame_id' => '2', 
              ],
              [
                     'id' => '92', 	'nr_identificare' => 'TMBAR8NX9PY018765', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2022-10-06', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1498', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '92', 	'frame_id' => '3', 
              ],
              [
                     'id' => '93', 	'nr_identificare' => 'WF0EXXWPCELL57191', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2022-10-11', 	 	 	 	 	 	 	 	 	'car_id' => '93', 	'frame_id' => '3', 
              ],
              [
                     'id' => '94', 	'nr_identificare' => 'TMBAG7NE2K0193963', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2022-10-11', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '85', 	'mtma' => '1898', 	'cap_cyl' => '1598', 	'cap_rez' => '50', 	'auto_inloc' => 'Nu', 	'km_contract' => '80', 	'car_id' => '94', 	'frame_id' => '3', 
              ],
              [
                     'id' => '95', 	'nr_identificare' => 'TMBAR8NX4PY018978', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2022-10-11', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1498', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '95', 	'frame_id' => '3', 
              ],
              [
                     'id' => '96', 	'nr_identificare' => 'TMBAR8NX8PY018045', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2022-10-10', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1498', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '96', 	'frame_id' => '3', 
              ],
              [
                     'id' => '97', 	'nr_identificare' => 'TMBAR8NX1PY019182', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2022-10-24', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1498', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '97', 	'frame_id' => '3', 
              ],
              [
                     'id' => '98', 	'nr_identificare' => 'TMBAR8NX5PY018312', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2022-10-19', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1490', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '98', 	'frame_id' => '3', 
              ],
              [
                     'id' => '99', 	'nr_identificare' => 'WF0SXXWPGSNJ39024', 	'caroseria' => 'BB furgon', 	 	'recep_auto' => '2022-11-16', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '73.3', 	'mtma' => '2290', 	'cap_cyl' => '1499', 	'cap_rez' => '56', 	 	 	'car_id' => '99', 	'frame_id' => '1', 
              ],
              [
                     'id' => '100', 	'nr_identificare' => 'WF0NXXGCHNNR12442', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-12-07', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '100', 	'frame_id' => '2', 
              ],
              [
                     'id' => '101', 	'nr_identificare' => 'WF0NXXGCHNNR13062', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-12-07', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '101', 	'frame_id' => '2', 
              ],
              [
                     'id' => '102', 	'nr_identificare' => 'WF0NXXGCHNNR13066', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-11-28', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '102', 	'frame_id' => '2', 
              ],
              [
                     'id' => '103', 	'nr_identificare' => 'WF0NXXGCHNNR12451', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-11-28', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '103', 	'frame_id' => '2', 
              ],
              [
                     'id' => '104', 	'nr_identificare' => 'VF0NXXGCHNNR12454', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-11-28', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '104', 	'frame_id' => '2', 
              ],
              [
                     'id' => '105', 	'nr_identificare' => 'WF0NXXGCHNNR12444', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-11-28', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '105', 	'frame_id' => '2', 
              ],
              [
                     'id' => '106', 	'nr_identificare' => 'WF0NXXGCHNNR12450', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-11-28', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '106', 	'frame_id' => '2', 
              ],
              [
                     'id' => '107', 	'nr_identificare' => 'WF0NXXGCHNNR13064', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-11-28', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '107', 	'frame_id' => '2', 
              ],
              [
                     'id' => '108', 	'nr_identificare' => 'WF0NXXGCHNNR12435', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2022-11-28', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '108', 	'frame_id' => '2', 
              ],
              [
                     'id' => '109', 	'nr_identificare' => 'WF0NXXGCHNNA20881', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2023-01-13', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1910', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '109', 	'frame_id' => '2', 
              ],
              [
                     'id' => '110', 	'nr_identificare' => 'WF0NXXGCHNNA20883', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2023-01-20', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1910', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '110', 	'frame_id' => '2', 
              ],
              [
                     'id' => '111', 	'nr_identificare' => 'VF3DDBHY6HJ614796', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-07-09', 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '73', 	'mtma' => '1590', 	'cap_cyl' => '1560', 	'cap_rez' => '50', 	 	 	'car_id' => '111', 	'frame_id' => '3', 
              ],
              [
                     'id' => '112', 	'nr_identificare' => 'WF0NXXGCHNKM78008', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2020-07-06', 	'an_fabr' => '2019', 	 	 	 	 	 	 	 	'car_id' => '112', 	'frame_id' => '2', 
              ],
              [
                     'id' => '113', 	'nr_identificare' => 'UU1DBG003NU084396', 	'caroseria' => 'AB berlina cu hayon', 	 	 	'an_fabr' => '2022', 	 	'p_kw' => '33', 	'mtma' => '1300', 	'cap_cyl' => '0', 	 	 	 	'car_id' => '113', 	'frame_id' => '2', 
              ],
              [
                     'id' => '114', 	'nr_identificare' => 'WF0EXXWPCEKM39396', 	'caroseria' => 'AA berlina cu hayon', 	 	'recep_auto' => '2020-09-01', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '2330', 	'cap_cyl' => '1985', 	'cap_rez' => '62', 	 	 	'car_id' => '114', 	'frame_id' => '12', 
              ],
              [
                     'id' => '115', 	'nr_identificare' => 'WF0NXXGCHNNR13070', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2023-03-09', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '115', 	'frame_id' => '2', 
              ],
              [
                     'id' => '116', 	'nr_identificare' => 'WF0NXXGCHNNR12443', 	'caroseria' => 'AB berlina cu hayon', 	 	 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '116', 	'frame_id' => '2', 
              ],
              [
                     'id' => '117', 	'nr_identificare' => 'WF0NXXGCHNNR13063', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2023-03-17', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '117', 	'frame_id' => '2', 
              ],
              [
                     'id' => '118', 	'nr_identificare' => 'WF0NXXGCHNNR12446', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2023-03-13', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '91.9', 	'mtma' => '1895', 	'cap_cyl' => '999', 	'cap_rez' => '52', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '118', 	'frame_id' => '2', 
              ],
              [
                     'id' => '119', 	'nr_identificare' => 'TMBAR8NX5PY018326', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2023-03-22', 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1490', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '119', 	'frame_id' => '3', 
              ],
              [
                     'id' => '120', 	'nr_identificare' => 'TMBER7NW2N3013520', 	'caroseria' => 'AB berlina cu hayon', 	 	 	 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '120', 	'frame_id' => '2', 
              ],
              [
                     'id' => '121', 	'nr_identificare' => 'TMBAG7NX0MY017497', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2021', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '121', 	'frame_id' => '3', 
              ],
              [
                     'id' => '122', 	'nr_identificare' => 'TMBEP6NJ9MZ084214', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	'recep_auto' => '2021-08-16', 	'an_fabr' => '2020', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '122', 	'frame_id' => '2', 
              ],
              [
                     'id' => '123', 	'nr_identificare' => 'VF3DDBHY6HJ644302', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-03-19', 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '73', 	'mtma' => '1590', 	'cap_cyl' => '1560', 	'cap_rez' => '50', 	 	 	'car_id' => '123', 	'frame_id' => '3', 
              ],
              [
                     'id' => '124', 	'nr_identificare' => 'TMBAR8NX5PY020075', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1490', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '124', 	'frame_id' => '3', 
              ],
              [
                     'id' => '125', 	'nr_identificare' => 'TMBAR8NXXPY017561', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1490', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '125', 	'frame_id' => '3', 
              ],
              [
                     'id' => '126', 	'nr_identificare' => 'TMBAR8NX3PY018227', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2022', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1890', 	'cap_cyl' => '1498', 	'cap_rez' => '48', 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '120', 	'car_id' => '126', 	'frame_id' => '3', 
              ],
              [
                     'id' => '127', 	'nr_identificare' => 'TMBAG7NX8MY077589', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-03-05', 	 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '127', 	'frame_id' => '3', 
              ],
              [
                     'id' => '128', 	'nr_identificare' => 'WF0MXXGCHMLB29637', 	'caroseria' => 'SEDAN', 	 	 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1775', 	'cap_cyl' => '1499', 	'cap_rez' => '47', 	 	 	'car_id' => '128', 	'frame_id' => '11', 
              ],
              [
                     'id' => '129', 	'nr_identificare' => 'VF3CC8HR0CW051034', 	'caroseria' => 'Berlina cu hayon', 	 	 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '50', 	'mtma' => '1580', 	'cap_cyl' => '1398', 	'cap_rez' => '50', 	 	 	'car_id' => '129', 	'frame_id' => '13', 
              ],
              [
                     'id' => '130', 	'nr_identificare' => 'WF0MXXGCHMLS79967', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-12-21', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '130', 	'frame_id' => '3', 
              ],
              [
                     'id' => '131', 	'nr_identificare' => 'VF3YD2MFC12H22538', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-03-09', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1997', 	'cap_rez' => '90', 	 	 	'car_id' => '131', 	'frame_id' => '1', 
              ],
              [
                     'id' => '132', 	'nr_identificare' => 'WF0MXXGCHMLL51609', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2022-04-14', 	'an_fabr' => '2020', 	 	 	 	 	 	 	'km_contract' => '100', 	'car_id' => '132', 	'frame_id' => '3', 
              ],
              [
                     'id' => '133', 	'nr_identificare' => 'TMBEP6NJ1MZ083378', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2023-03-17', 	'an_fabr' => '2020', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '133', 	'frame_id' => '2', 
              ],
              [
                     'id' => '134', 	'nr_identificare' => 'WF0EXXWPCELL57195', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2020', 	 	 	 	 	 	 	 	'car_id' => '134', 	'frame_id' => '3', 
              ],
              [
                     'id' => '135', 	'nr_identificare' => 'TMBEP6NJ1MZ083381', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	'recep_auto' => '2022-11-07', 	'an_fabr' => '2020', 	 	 	 	 	 	'auto_inloc' => 'Da 15 zile', 	'km_contract' => '100', 	'car_id' => '135', 	'frame_id' => '2', 
              ],
              [
                     'id' => '136', 	'nr_identificare' => 'TMBLK9NS8K8048503', 	'caroseria' => 'AC break', 	 	 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '140', 	'mtma' => '2400', 	'cap_cyl' => '1968', 	'cap_rez' => '63', 	 	 	'car_id' => '136', 	'frame_id' => '9', 
              ],
              [
                     'id' => '137', 	'nr_identificare' => 'WF0EXXWPCEKL10189', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2023-02-20', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '2330', 	'cap_cyl' => '1995', 	'cap_rez' => '50', 	'auto_inloc' => 'Nu', 	'km_contract' => '120', 	'car_id' => '137', 	'frame_id' => '3', 
              ],
              [
                     'id' => '138', 	'nr_identificare' => 'VF3LB9HCGES146034', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	 	'an_fabr' => '2014', 	'poluare' => '5', 	'p_kw' => '85', 	'mtma' => '1780', 	'cap_cyl' => '1560', 	'cap_rez' => '50', 	 	 	'car_id' => '138', 	'frame_id' => '2', 
              ],
              [
                     'id' => '139', 	'nr_identificare' => 'VF34C9HXC55053751', 	'caroseria' => 'AB berlina cu hayon', 	 	 	'an_fabr' => '2007', 	'poluare' => '4', 	'p_kw' => '66.2', 	'mtma' => '1804', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '139', 	'frame_id' => '2', 
              ],
              [
                     'id' => '140', 	'nr_identificare' => 'VF3WC8HZC9T074366', 	'caroseria' => 'AB berlina cu hayon', 	 	 	'an_fabr' => '2009', 	'poluare' => '4', 	'p_kw' => '50', 	'mtma' => '1660', 	'cap_cyl' => '1398', 	'cap_rez' => '50', 	 	 	'car_id' => '140', 	'frame_id' => '2', 
              ],
              [
                     'id' => '141', 	'nr_identificare' => 'VF36DRHRH21641377', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2007', 	'poluare' => '4', 	'p_kw' => '100', 	'mtma' => '2080', 	'cap_cyl' => '1997', 	'cap_rez' => '66', 	 	 	'car_id' => '141', 	'frame_id' => '3', 
              ],
              [
                     'id' => '142', 	'nr_identificare' => 'WF0FXXTTFFCS78838', 	'caroseria' => 'BA suprastructura deschisa', 	'are_gps' => '1', 	'recep_auto' => '2020-10-19', 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '92', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '80', 	 	 	'car_id' => '142', 	'frame_id' => '16', 
              ],
              [
                     'id' => '143', 	'nr_identificare' => 'JMBXJCW7W8Z003983', 	'caroseria' => 'AC break', 	 	'recep_auto' => '2020-08-03', 	'an_fabr' => '2008', 	'poluare' => '4', 	'p_kw' => '115', 	'mtma' => '2410', 	'cap_cyl' => '2179', 	'cap_rez' => '60', 	 	 	'car_id' => '143', 	'frame_id' => '9', 
              ],
              [
                     'id' => '144', 	'nr_identificare' => 'VF36DRHRH21673701', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2020-07-21', 	'an_fabr' => '2007', 	'poluare' => '4', 	'p_kw' => '100', 	'mtma' => '2080', 	'cap_cyl' => '1997', 	'cap_rez' => '66', 	 	 	'car_id' => '144', 	'frame_id' => '3', 
              ],
              [
                     'id' => '145', 	'nr_identificare' => 'VF7YAAMPA11239038', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	 	 	'an_fabr' => '2007', 	'poluare' => '4', 	'p_kw' => '74', 	'mtma' => '3000', 	'cap_cyl' => '2198', 	'cap_rez' => '90', 	 	 	'car_id' => '145', 	'frame_id' => '4', 
              ],
              [
                     'id' => '146', 	'nr_identificare' => 'VF3YCBMFC11534099', 	'caroseria' => 'BB Furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2008', 	'poluare' => '4', 	'p_kw' => '88', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '90', 	 	 	'car_id' => '146', 	'frame_id' => '1', 
              ],
              [
                     'id' => '147', 	'nr_identificare' => 'VF3YD2MFC12E24882', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2017', 	'poluare' => '6', 	 	 	 	 	 	 	'car_id' => '147', 	'frame_id' => '1', 
              ],
              [
                     'id' => '148', 	'nr_identificare' => 'VF3YD2MFC12C39585', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2016', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1997', 	'cap_rez' => '90', 	 	 	'car_id' => '148', 	'frame_id' => '1', 
              ],
              [
                     'id' => '149', 	'nr_identificare' => 'VF3YCAMFC12023485', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2011', 	'poluare' => '4', 	'p_kw' => '74', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '90', 	 	 	'car_id' => '149', 	'frame_id' => '1', 
              ],
              [
                     'id' => '150', 	'nr_identificare' => 'WVWZZZ1KZ8M357196', 	'caroseria' => 'AC break', 	 	'recep_auto' => '2020-08-18', 	'an_fabr' => '2008', 	'poluare' => '4', 	'p_kw' => '77', 	'mtma' => '1990', 	'cap_cyl' => '1896', 	'cap_rez' => '55', 	 	 	'car_id' => '150', 	'frame_id' => '9', 
              ],
              [
                     'id' => '151', 	'nr_identificare' => 'WF0DXXTTGDES68519', 	'caroseria' => 'Plat cu prelata', 	 	'recep_auto' => '2020-10-19', 	'an_fabr' => '2014', 	'poluare' => '5', 	'p_kw' => '92', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '80', 	 	 	'car_id' => '151', 	'frame_id' => '6', 
              ],
              [
                     'id' => '152', 	'nr_identificare' => 'VF34C9HD8DS097383', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	'are_gps' => '1', 	'recep_auto' => '2021-03-30', 	'an_fabr' => '2013', 	'poluare' => '5', 	'p_kw' => '84', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '152', 	'frame_id' => '4', 
              ],
              [
                     'id' => '153', 	'nr_identificare' => 'VF34C9HD8DS093203', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	'are_gps' => '1', 	 	'an_fabr' => '2013', 	'poluare' => '5', 	'p_kw' => '84', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '153', 	'frame_id' => '4', 
              ],
              [
                     'id' => '154', 	'nr_identificare' => 'WBAFG010X0L387592', 	'caroseria' => 'AC break', 	 	 	'an_fabr' => '2010', 	'poluare' => '4', 	'p_kw' => '210', 	'mtma' => '2710', 	'cap_cyl' => '2993', 	'cap_rez' => '85', 	 	 	'car_id' => '154', 	'frame_id' => '9', 
              ],
              [
                     'id' => '155', 	'nr_identificare' => 'VF34C9HD8DS097387', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	 	'recep_auto' => '2021-02-03', 	'an_fabr' => '2013', 	'poluare' => '5', 	'p_kw' => '84', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '155', 	'frame_id' => '4', 
              ],
              [
                     'id' => '156', 	'nr_identificare' => 'VF3DDBHY6HJ584192', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-08-25', 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '73', 	'mtma' => '1590', 	'cap_cyl' => '1560', 	'cap_rez' => '50', 	 	 	'car_id' => '156', 	'frame_id' => '3', 
              ],
              [
                     'id' => '157', 	'nr_identificare' => 'VF3DDBHY6HJ592618', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2020-09-01', 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '73', 	'mtma' => '1590', 	'cap_cyl' => '1560', 	'cap_rez' => '50', 	 	 	'car_id' => '157', 	'frame_id' => '3', 
              ],
              [
                     'id' => '158', 	'nr_identificare' => 'VF3WC8HZC9T085341', 	'caroseria' => 'AB berlina cu hayon', 	'are_gps' => '1', 	'recep_auto' => '2020-11-05', 	'an_fabr' => '2009', 	'poluare' => '4', 	'p_kw' => '50', 	'mtma' => '1660', 	'cap_cyl' => '1398', 	'cap_rez' => '50', 	 	 	'car_id' => '158', 	'frame_id' => '2', 
              ],
              [
                     'id' => '159', 	'nr_identificare' => 'VF34E9HR8BS137200', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	'are_gps' => '1', 	'recep_auto' => '2020-10-02', 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '82', 	'mtma' => '1970', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '159', 	'frame_id' => '4', 
              ],
              [
                     'id' => '160', 	'nr_identificare' => 'VF34E9HR8BS137202', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	'are_gps' => '1', 	'recep_auto' => '2021-08-19', 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '82', 	'mtma' => '1970', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '160', 	'frame_id' => '4', 
              ],
              [
                     'id' => '161', 	'nr_identificare' => 'VF34E9HR8BS135571', 	'caroseria' => 'AF vehicul cu utilizare multipla', 	 	 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '82', 	'mtma' => '1970', 	'cap_cyl' => '1560', 	'cap_rez' => '60', 	 	 	'car_id' => '161', 	'frame_id' => '4', 
              ],
              [
                     'id' => '162', 	'nr_identificare' => 'VF3DDBHY6HJ649584', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '73', 	'mtma' => '1590', 	'cap_cyl' => '1560', 	'cap_rez' => '50', 	 	 	'car_id' => '162', 	'frame_id' => '3', 
              ],
              [
                     'id' => '163', 	'nr_identificare' => 'VF3CC8HR0CW051033', 	'caroseria' => 'Berlina cu hayon', 	 	 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '50', 	'mtma' => '1580', 	'cap_cyl' => '1398', 	'cap_rez' => '50', 	 	 	'car_id' => '163', 	'frame_id' => '13', 
              ],
              [
                     'id' => '164', 	'nr_identificare' => 'VF34C9HR8CS150821', 	'caroseria' => 'AB berlina cu hayon', 	 	'recep_auto' => '2020-10-09', 	'an_fabr' => '2012', 	'poluare' => '5', 	'p_kw' => '82', 	'mtma' => '1860', 	'cap_cyl' => '1560', 	 	 	 	'car_id' => '164', 	'frame_id' => '2', 
              ],
              [
                     'id' => '165', 	'nr_identificare' => 'VF3YC2MFC12F79767', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2020-09-15', 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1997', 	'cap_rez' => '90', 	 	 	'car_id' => '165', 	'frame_id' => '1', 
              ],
              [
                     'id' => '166', 	'nr_identificare' => 'VF3YCTMFC12A73394', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	 	'an_fabr' => '2016', 	'poluare' => '5', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '2198', 	'cap_rez' => '90', 	 	 	'car_id' => '166', 	'frame_id' => '1', 
              ],
              [
                     'id' => '167', 	'nr_identificare' => 'VF3YD2MFC12E30583', 	'caroseria' => 'BB furgon', 	'are_gps' => '1', 	'recep_auto' => '2021-04-06', 	'an_fabr' => '2017', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1997', 	'cap_rez' => '90', 	 	 	'car_id' => '167', 	'frame_id' => '1', 
              ],
              [
                     'id' => '168', 	'nr_identificare' => 'JTEHH20VX06028044', 	'caroseria' => 'Break, 4+1 usi', 	 	 	'an_fabr' => '2001', 	'poluare' => '3', 	'p_kw' => '110', 	'mtma' => '1825', 	'cap_cyl' => '1998', 	'cap_rez' => '57', 	 	 	'car_id' => '168', 	'frame_id' => '15', 
              ],
              [
                     'id' => '169', 	'nr_identificare' => 'UU1FSD1K537429981', 	'caroseria' => 'Van BB furgon', 	 	 	'an_fabr' => '2007', 	'poluare' => '4', 	'p_kw' => '50', 	'mtma' => '1990', 	'cap_cyl' => '1461', 	'cap_rez' => '50', 	 	 	'car_id' => '169', 	'frame_id' => '14', 
              ],
              [
                     'id' => '170', 	'nr_identificare' => 'UU1FSD1K537429976', 	'caroseria' => 'Van BB furgon', 	 	 	'an_fabr' => '2007', 	'poluare' => '4', 	'p_kw' => '50', 	'mtma' => '1990', 	'cap_cyl' => '1461', 	'cap_rez' => '50', 	 	 	'car_id' => '170', 	'frame_id' => '14', 
              ],
              [
                     'id' => '171', 	'nr_identificare' => 'WF0DXXTTGDGK88168', 	'caroseria' => 'BA06 cu prelata', 	'are_gps' => '1', 	 	'an_fabr' => '2016', 	'poluare' => '6', 	'p_kw' => '96', 	'mtma' => '3500', 	'cap_cyl' => '1995', 	'cap_rez' => '80', 	 	 	'car_id' => '171', 	'frame_id' => '7', 
              ],
              [
                     'id' => '172', 	'nr_identificare' => 'WF06XXGCC6GB42949', 	'caroseria' => 'AC break', 	 	 	'an_fabr' => '2016', 	 	 	 	 	 	 	 	'car_id' => '172', 	'frame_id' => '9', 
              ],
              [
                     'id' => '173', 	'nr_identificare' => 'WF05XXGCC5GS62187', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2020-08-06 16:00', 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '173', 	'frame_id' => '3', 
              ],
              [
                     'id' => '174', 	'nr_identificare' => 'WF06XXGCC6GB42935', 	'caroseria' => 'AC break', 	'are_gps' => '1', 	'recep_auto' => '2020-09-20', 	'an_fabr' => '2016', 	 	 	 	 	 	 	 	'car_id' => '174', 	'frame_id' => '9', 
              ],
              [
                     'id' => '175', 	'nr_identificare' => 'WF06XXGCC6GB42941', 	'caroseria' => 'AC break', 	 	'recep_auto' => '2020-10-01', 	'an_fabr' => '2016', 	 	 	 	 	 	 	 	'car_id' => '175', 	'frame_id' => '9', 
              ],
              [
                     'id' => '176', 	'nr_identificare' => 'WF05XXGCC5GS62169', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2020-09-25', 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '176', 	'frame_id' => '3', 
              ],
              [
                     'id' => '177', 	'nr_identificare' => 'WF05XXGCC5GS62067', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '177', 	'frame_id' => '3', 
              ],
              [
                     'id' => '178', 	'nr_identificare' => 'WF05XXGCC5GS62011', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '178', 	'frame_id' => '3', 
              ],
              [
                     'id' => '179', 	'nr_identificare' => 'WF05XXGCC5GS62078', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '179', 	'frame_id' => '3', 
              ],
              [
                     'id' => '180', 	'nr_identificare' => 'WF06XXGCC6GB42946', 	'caroseria' => 'AC break', 	 	 	'an_fabr' => '2016', 	 	 	 	 	 	 	 	'car_id' => '180', 	'frame_id' => '9', 
              ],
              [
                     'id' => '181', 	'nr_identificare' => 'WF05XXGCC5GS62190', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '181', 	'frame_id' => '3', 
              ],
              [
                     'id' => '182', 	'nr_identificare' => 'WF05XXGCC5GS62206', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '182', 	'frame_id' => '3', 
              ],
              [
                     'id' => '183', 	'nr_identificare' => 'WF05XXGCC5GS62218', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '183', 	'frame_id' => '3', 
              ],
              [
                     'id' => '184', 	'nr_identificare' => 'WF05XXGCC5GS62200', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '184', 	'frame_id' => '3', 
              ],
              [
                     'id' => '185', 	'nr_identificare' => 'WF05XXGCC5GS62215', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2017', 	 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	 	 	 	'car_id' => '185', 	'frame_id' => '3', 
              ],
              [
                     'id' => '186', 	'nr_identificare' => 'TMBAG7NE9G0227825', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2016', 	'poluare' => '6', 	'p_kw' => '81', 	'mtma' => '1855', 	'cap_cyl' => '1598', 	'cap_rez' => '50', 	 	 	'car_id' => '186', 	'frame_id' => '3', 
              ],
              [
                     'id' => '187', 	'nr_identificare' => 'TMBAG7NE3G0227643', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-10-05', 	'an_fabr' => '2016', 	'poluare' => '6', 	'p_kw' => '81', 	'mtma' => '1855', 	'cap_cyl' => '1598', 	'cap_rez' => '50', 	 	 	'car_id' => '187', 	'frame_id' => '3', 
              ],
              [
                     'id' => '188', 	'nr_identificare' => 'TMBAG7NE4G0228624', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2016', 	'poluare' => '6', 	'p_kw' => '81', 	'mtma' => '1855', 	'cap_cyl' => '1598', 	'cap_rez' => '50', 	 	 	'car_id' => '188', 	'frame_id' => '3', 
              ],
              [
                     'id' => '189', 	'nr_identificare' => 'TMBAG7NE3G0226802', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2016', 	'poluare' => '6', 	'p_kw' => '81', 	'mtma' => '1855', 	'cap_cyl' => '1598', 	'cap_rez' => '50', 	 	 	'car_id' => '189', 	'frame_id' => '3', 
              ],
              [
                     'id' => '190', 	'nr_identificare' => 'WF05XXGCC5JL08435', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-06-15', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	 	 	'car_id' => '190', 	'frame_id' => '3', 
              ],
              [
                     'id' => '191', 	'nr_identificare' => 'TMBAJ7NE1J0286912', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-01-14', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1384', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	 	 	'car_id' => '191', 	'frame_id' => '3', 
              ],
              [
                     'id' => '192', 	'nr_identificare' => 'TMBAJ7NE6J0289367', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-07-06', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1384', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	 	 	'car_id' => '192', 	'frame_id' => '3', 
              ],
              [
                     'id' => '193', 	'nr_identificare' => 'TMBAJ7NE1J0278969', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-08-26', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1384', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	 	 	'car_id' => '193', 	'frame_id' => '3', 
              ],
              [
                     'id' => '194', 	'nr_identificare' => 'TMBAJ7NE1J0277627', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-03-17', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1384', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	 	 	'car_id' => '194', 	'frame_id' => '3', 
              ],
              [
                     'id' => '195', 	'nr_identificare' => 'TMBAJ7NE2J0277653', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-07-12', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1384', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	 	 	'car_id' => '195', 	'frame_id' => '3', 
              ],
              [
                     'id' => '196', 	'nr_identificare' => 'TMBAJ7NE4J0279307', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-04-29', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1384', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	 	 	'car_id' => '196', 	'frame_id' => '3', 
              ],
              [
                     'id' => '197', 	'nr_identificare' => 'TMBAJ7NE7J0276191', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-05-17', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '110', 	'mtma' => '1384', 	'cap_cyl' => '1968', 	'cap_rez' => '50', 	 	 	'car_id' => '197', 	'frame_id' => '3', 
              ],
              [
                     'id' => '198', 	'nr_identificare' => 'WF05XXGCC5JL08468', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-08-21', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	 	 	'car_id' => '198', 	'frame_id' => '3', 
              ],
              [
                     'id' => '199', 	'nr_identificare' => 'WF05XXGCC5JL08453', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-12-23', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	 	 	'car_id' => '199', 	'frame_id' => '3', 
              ],
              [
                     'id' => '200', 	'nr_identificare' => 'WF05XXGCC5JL08498', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2021-09-15', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	 	 	'car_id' => '200', 	'frame_id' => '3', 
              ],
              [
                     'id' => '201', 	'nr_identificare' => 'WF05XXGCC5JL08620', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2021-03-18', 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	 	 	'car_id' => '201', 	'frame_id' => '3', 
              ],
              [
                     'id' => '202', 	'nr_identificare' => 'WF05XXGCC5JL08504', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	 	 	'car_id' => '202', 	'frame_id' => '3', 
              ],
              [
                     'id' => '203', 	'nr_identificare' => 'WF05XXGCC5HE84103', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2022-08-29', 	'an_fabr' => '2018', 	 	 	 	 	 	 	 	'car_id' => '203', 	'frame_id' => '3', 
              ],
              [
                     'id' => '204', 	'nr_identificare' => 'WF05XXGCC5HE84080', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2018', 	 	 	 	 	 	 	 	'car_id' => '204', 	'frame_id' => '3', 
              ],
              [
                     'id' => '205', 	'nr_identificare' => 'WF05XXGCC5HE84084', 	'caroseria' => 'AA berlina', 	 	'recep_auto' => '2020-11-25', 	'an_fabr' => '2018', 	 	 	 	 	 	 	 	'car_id' => '205', 	'frame_id' => '3', 
              ],
              [
                     'id' => '206', 	'nr_identificare' => 'WF05XXGCC5HE84085', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2018', 	 	 	 	 	 	 	 	'car_id' => '206', 	'frame_id' => '3', 
              ],
              [
                     'id' => '207', 	'nr_identificare' => 'WF05XXGCC5HE84087', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2018', 	 	 	 	 	 	 	 	'car_id' => '207', 	'frame_id' => '3', 
              ],
              [
                     'id' => '208', 	'nr_identificare' => 'WF05XXGCC5HE84089', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2020-11-03', 	'an_fabr' => '2018', 	 	 	 	 	 	 	 	'car_id' => '208', 	'frame_id' => '3', 
              ],
              [
                     'id' => '209', 	'nr_identificare' => 'WF05XXGCC5HE84093', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	 	'an_fabr' => '2018', 	 	 	 	 	 	 	 	'car_id' => '209', 	'frame_id' => '3', 
              ],
              [
                     'id' => '210', 	'nr_identificare' => 'WF05XXGCC5HE84101', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	 	'an_fabr' => '2018', 	 	 	 	 	 	 	 	'car_id' => '210', 	'frame_id' => '3', 
              ],
              [
                     'id' => '211', 	'nr_identificare' => 'WF05XXGCC5HE84104', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2018', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	 	 	'car_id' => '211', 	'frame_id' => '3', 
              ],
              [
                     'id' => '212', 	'nr_identificare' => 'WF05XXGCC5JT14215', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 20 zile', 	'km_contract' => '120', 	'car_id' => '212', 	'frame_id' => '3', 
              ],
              [
                     'id' => '213', 	'nr_identificare' => 'WF05XXGCC5JS67322', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	'recep_auto' => '2022-08-29', 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 20 zile', 	'km_contract' => '120', 	'car_id' => '213', 	'frame_id' => '3', 
              ],
              [
                     'id' => '214', 	'nr_identificare' => 'WF05XXGCC5JT14217', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 20 zile', 	'km_contract' => '120', 	'car_id' => '214', 	'frame_id' => '3', 
              ],
              [
                     'id' => '215', 	'nr_identificare' => 'WF05XXGCC5JT14216', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 20 zile', 	'km_contract' => '120', 	'car_id' => '215', 	'frame_id' => '3', 
              ],
              [
                     'id' => '216', 	'nr_identificare' => 'WF05XXGCC5JS67339', 	'caroseria' => 'AA berlina', 	 	 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 20 zile', 	'km_contract' => '120', 	'car_id' => '216', 	'frame_id' => '3', 
              ],
              [
                     'id' => '217', 	'nr_identificare' => 'WF05XXGCC5JS67346', 	'caroseria' => 'AA berlina', 	'are_gps' => '1', 	 	'an_fabr' => '2019', 	'poluare' => '6', 	'p_kw' => '88', 	'mtma' => '1900', 	'cap_cyl' => '1499', 	'cap_rez' => '50', 	'auto_inloc' => 'Da 20 zile', 	'km_contract' => '120', 	'car_id' => '217', 	'frame_id' => '3', 
              ],
                                                          
            )            
        )->count(217)->create();
        
                

    }

}
