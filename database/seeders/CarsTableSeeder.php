<?php

namespace Database\Seeders;


use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CarsTableSeeder extends Seeder
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
        $users = Car::factory()->state(
            new Sequence(
              [
                     'id' => '1', 	'numar' => 'B-121-CLT', 	'fuel_id' => '2', 	'type_id' => '1', 	'brand_id' => '1', 
              ],
              [
                     'id' => '2', 	'numar' => 'B-125-CLT', 	'fuel_id' => '2', 	'type_id' => '1', 	'brand_id' => '1', 
              ],
              [
                     'id' => '3', 	'numar' => 'B-126-CLT', 	'fuel_id' => '2', 	'type_id' => '1', 	'brand_id' => '1', 
              ],
              [
                     'id' => '4', 	'numar' => 'B-129-CLT', 	'fuel_id' => '2', 	'type_id' => '1', 	'brand_id' => '1', 
              ],
              [
                     'id' => '5', 	'numar' => 'B-134-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '6', 	'numar' => 'B-138-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '7', 	'numar' => 'B-139-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '8', 	'numar' => 'B-141-CLT', 	'fuel_id' => '2', 	'type_id' => '3', 	'brand_id' => '1', 
              ],
              [
                     'id' => '9', 	'numar' => 'B-145-CLT', 	'fuel_id' => '2', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '10', 	'numar' => 'B-147-CLT', 	'fuel_id' => '2', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '11', 	'numar' => 'B-146-CLT', 	'fuel_id' => '2', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '12', 	'numar' => 'B-151-CLT', 	'fuel_id' => '2', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '13', 	'numar' => 'B-800-CLT', 	'fuel_id' => '2', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '14', 	'numar' => 'B-207-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '15', 	'numar' => 'B-208-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '16', 	'numar' => 'B-216-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '17', 	'numar' => 'B-28-CLT', 	'fuel_id' => '2', 	'type_id' => '1', 	'brand_id' => '1', 
              ],
              [
                     'id' => '18', 	'numar' => 'B-333-CLT', 	'fuel_id' => '2', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '19', 	'numar' => 'B-44-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '20', 	'numar' => 'B-440-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '21', 	'numar' => 'B-505-CLT', 	'fuel_id' => '2', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '22', 	'numar' => 'B-553-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '23', 	'numar' => 'B-554-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '24', 	'numar' => 'B-770-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '25', 	'numar' => 'B-83-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '26', 	'numar' => 'B-880-CNS', 	'fuel_id' => '2', 	'type_id' => '8', 	'brand_id' => '4', 
              ],
              [
                     'id' => '27', 	'numar' => 'B-882-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '28', 	'numar' => 'B-884-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '29', 	'numar' => 'B-888-CNO', 	'fuel_id' => '1', 	'type_id' => '9', 	'brand_id' => '5', 
              ],
              [
                     'id' => '30', 	'numar' => 'B-888-CNS', 	'fuel_id' => '2', 	'type_id' => '10', 	'brand_id' => '6', 
              ],
              [
                     'id' => '31', 	'numar' => 'B-888-CSO', 	'fuel_id' => '2', 	'type_id' => '11', 	'brand_id' => '7', 
              ],
              [
                     'id' => '32', 	'numar' => 'B-990-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '33', 	'numar' => 'B-127-CLT', 	'fuel_id' => '2', 	'type_id' => '1', 	'brand_id' => '1', 
              ],
              [
                     'id' => '34', 	'numar' => 'B-224-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '35', 	'numar' => 'B-225-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '36', 	'numar' => 'B-145-LRS', 	'fuel_id' => '1', 	'type_id' => '12', 	'brand_id' => '8', 
              ],
              [
                     'id' => '37', 	'numar' => 'B-229-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '38', 	'numar' => 'B-777-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '39', 	'numar' => 'B-801-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '40', 	'numar' => 'B-221-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '41', 	'numar' => 'B-228-CLT', 	'fuel_id' => '2', 	'type_id' => '13', 	'brand_id' => '2', 
              ],
              [
                     'id' => '42', 	'numar' => 'B-24-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '43', 	'numar' => 'B-116-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '44', 	'numar' => 'B-118-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '45', 	'numar' => 'B-240-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '46', 	'numar' => 'B-250-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '47', 	'numar' => 'B-205-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '48', 	'numar' => 'B-175-CLT', 	'fuel_id' => '2', 	'type_id' => '14', 	'brand_id' => '1', 
              ],
              [
                     'id' => '49', 	'numar' => 'B-807-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '50', 	'numar' => 'B-804-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '51', 	'numar' => 'B-809-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '52', 	'numar' => 'B-16-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '53', 	'numar' => 'B-805-CLT', 	'fuel_id' => '2', 	'type_id' => '13', 	'brand_id' => '2', 
              ],
              [
                     'id' => '54', 	'numar' => 'B-806-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '55', 	'numar' => 'B-902-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '56', 	'numar' => 'B-903-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '57', 	'numar' => 'B-188-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '58', 	'numar' => 'B-880-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '59', 	'numar' => 'B-144-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '60', 	'numar' => 'B-552-CLT', 	'fuel_id' => '2', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '61', 	'numar' => 'B-303-CLT', 	'fuel_id' => '2', 	'type_id' => '13', 	'brand_id' => '2', 
              ],
              [
                     'id' => '62', 	'numar' => 'B-155-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '63', 	'numar' => 'B-156-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '64', 	'numar' => 'B-601-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '65', 	'numar' => 'B-172-CLT', 	'fuel_id' => '2', 	'type_id' => '14', 	'brand_id' => '1', 
              ],
              [
                     'id' => '66', 	'numar' => 'B-117-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '67', 	'numar' => 'B-914-CLT', 	'fuel_id' => '1', 	'type_id' => '15', 	'brand_id' => '3', 
              ],
              [
                     'id' => '68', 	'numar' => 'B-912-CLT', 	'fuel_id' => '1', 	'type_id' => '15', 	'brand_id' => '3', 
              ],
              [
                     'id' => '69', 	'numar' => 'B-916-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '70', 	'numar' => 'B-917-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '71', 	'numar' => 'B-27-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '72', 	'numar' => 'B-923-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '73', 	'numar' => 'B-217-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '74', 	'numar' => 'B-906-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '75', 	'numar' => 'B-925-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '76', 	'numar' => 'B-901-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '77', 	'numar' => 'B-920-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '78', 	'numar' => 'B-148-CLT', 	'fuel_id' => '2', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '79', 	'numar' => 'B-803-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '80', 	'numar' => 'B-888-CSN', 	'fuel_id' => '1', 	'type_id' => '17', 	'brand_id' => '3', 
              ],
              [
                     'id' => '81', 	'numar' => 'B-29-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '82', 	'numar' => 'B-921-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '83', 	'numar' => 'B-907-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '84', 	'numar' => 'B-157-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '85', 	'numar' => 'B-158-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '86', 	'numar' => 'B-159-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '87', 	'numar' => 'B-160-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '88', 	'numar' => 'B-911-CLT', 	'fuel_id' => '2', 	'type_id' => '15', 	'brand_id' => '3', 
              ],
              [
                     'id' => '89', 	'numar' => 'B-915-CLT', 	'fuel_id' => '1', 	'type_id' => '15', 	'brand_id' => '3', 
              ],
              [
                     'id' => '90', 	'numar' => 'B-230-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '91', 	'numar' => 'B-918-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '92', 	'numar' => 'B-163-CLT', 	'fuel_id' => '1', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '93', 	'numar' => 'B-227-CLT', 	'fuel_id' => '2', 	'type_id' => '13', 	'brand_id' => '2', 
              ],
              [
                     'id' => '94', 	'numar' => 'B-186-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '95', 	'numar' => 'B-166-CLT', 	'fuel_id' => '1', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '96', 	'numar' => 'B-162-CLT', 	'fuel_id' => '1', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '97', 	'numar' => 'B-161-CLT', 	'fuel_id' => '1', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '98', 	'numar' => 'B-260-CLT', 	'fuel_id' => '1', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '99', 	'numar' => 'B-101-CLT', 	'fuel_id' => '2', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '100', 	'numar' => 'B-132-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '101', 	'numar' => 'B-128-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '102', 	'numar' => 'B-149-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '103', 	'numar' => 'B-119-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '104', 	'numar' => 'B-123-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '105', 	'numar' => 'B-104-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '106', 	'numar' => 'B-109-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '107', 	'numar' => 'B-140-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '108', 	'numar' => 'B-133-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '109', 	'numar' => 'B-199-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '110', 	'numar' => 'B-200-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '111', 	'numar' => 'B-171-CLT', 	'fuel_id' => '2', 	'type_id' => '14', 	'brand_id' => '1', 
              ],
              [
                     'id' => '112', 	'numar' => 'B-136-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '113', 	'numar' => 'B-898-CST', 	'fuel_id' => '1', 	'type_id' => '18', 	'brand_id' => '9', 
              ],
              [
                     'id' => '114', 	'numar' => 'B-218-CLT', 	'fuel_id' => '2', 	'type_id' => '13', 	'brand_id' => '2', 
              ],
              [
                     'id' => '115', 	'numar' => 'B-135-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '116', 	'numar' => 'B-131-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '117', 	'numar' => 'B-130-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '118', 	'numar' => 'B-105-CLT', 	'fuel_id' => '1', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '119', 	'numar' => 'B-262-CLT', 	'fuel_id' => '1', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '120', 	'numar' => 'B-924-CLT', 	'fuel_id' => '1', 	'type_id' => '16', 	'brand_id' => '3', 
              ],
              [
                     'id' => '121', 	'numar' => 'B-904-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '122', 	'numar' => 'B-908-CLT', 	'fuel_id' => '1', 	'type_id' => '15', 	'brand_id' => '3', 
              ],
              [
                     'id' => '123', 	'numar' => 'B-178-CLT', 	'fuel_id' => '2', 	'type_id' => '14', 	'brand_id' => '1', 
              ],
              [
                     'id' => '124', 	'numar' => 'B-164-CLT', 	'fuel_id' => '1', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '125', 	'numar' => 'B-261-CLT', 	'fuel_id' => '1', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '126', 	'numar' => 'B-165-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '127', 	'numar' => 'B-905-CLT', 	'fuel_id' => '2', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '128', 	'numar' => 'B-223-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '129', 	'numar' => 'B-122-CLT', 	'fuel_id' => '2', 	'type_id' => '19', 	'brand_id' => '1', 
              ],
              [
                     'id' => '130', 	'numar' => 'B-209-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '131', 	'numar' => 'B-551-CLT', 	'fuel_id' => '2', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '132', 	'numar' => 'B-802-CLT', 	'fuel_id' => '2', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '133', 	'numar' => 'B-913-CLT', 	'fuel_id' => '1', 	'type_id' => '15', 	'brand_id' => '3', 
              ],
              [
                     'id' => '134', 	'numar' => 'B-226-CLT', 	'fuel_id' => '2', 	'type_id' => '13', 	'brand_id' => '2', 
              ],
              [
                     'id' => '135', 	'numar' => 'B-910-CLT', 	'fuel_id' => '1', 	'type_id' => '15', 	'brand_id' => '3', 
              ],
              [
                     'id' => '136', 	'numar' => 'B-988-CNS', 	'fuel_id' => '2', 	'type_id' => '20', 	'brand_id' => '3', 
              ],
              [
                     'id' => '137', 	'numar' => 'B-187-CLT', 	'fuel_id' => '2', 	'type_id' => '13', 	'brand_id' => '2', 
              ],
              [
                     'id' => '138', 	'numar' => 'B-143-CLT', 	'fuel_id' => '2', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '139', 	'numar' => 'B-130-CLT', 	'fuel_id' => '5', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '140', 	'numar' => 'B-48-CNH', 	'fuel_id' => '5', 	'type_id' => '23', 	'brand_id' => '1', 
              ],
              [
                     'id' => '141', 	'numar' => 'B-888-CLT', 	'fuel_id' => '5', 	'type_id' => '24', 	'brand_id' => '1', 
              ],
              [
                     'id' => '142', 	'numar' => 'B-128-CLT', 	'fuel_id' => '5', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '143', 	'numar' => 'B-999-CLS', 	'fuel_id' => '5', 	'type_id' => '25', 	'brand_id' => '11', 
              ],
              [
                     'id' => '144', 	'numar' => 'B-889-CLT', 	'fuel_id' => '5', 	'type_id' => '24', 	'brand_id' => '1', 
              ],
              [
                     'id' => '145', 	'numar' => 'B-131-CLT', 	'fuel_id' => '5', 	'type_id' => '26', 	'brand_id' => '12', 
              ],
              [
                     'id' => '146', 	'numar' => 'B-500-CLT', 	'fuel_id' => '5', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '147', 	'numar' => 'B-330-CLT', 	'fuel_id' => '5', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '148', 	'numar' => 'B-300-CLT', 	'fuel_id' => '5', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '149', 	'numar' => 'B-135-CLT', 	'fuel_id' => '5', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '150', 	'numar' => 'B-93-CNL', 	'fuel_id' => '5', 	'type_id' => '30', 	'brand_id' => '14', 
              ],
              [
                     'id' => '151', 	'numar' => 'B-140-CLT', 	'fuel_id' => '5', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '152', 	'numar' => 'B-150-CLT', 	'fuel_id' => '5', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '153', 	'numar' => 'B-152-CLT', 	'fuel_id' => '5', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '154', 	'numar' => 'B-888-CNL', 	'fuel_id' => '5', 	'type_id' => '27', 	'brand_id' => '13', 
              ],
              [
                     'id' => '155', 	'numar' => 'B-149-CLT', 	'fuel_id' => '5', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '156', 	'numar' => 'B-173-CLT', 	'fuel_id' => '5', 	'type_id' => '14', 	'brand_id' => '1', 
              ],
              [
                     'id' => '157', 	'numar' => 'B-174-CLT', 	'fuel_id' => '5', 	'type_id' => '14', 	'brand_id' => '1', 
              ],
              [
                     'id' => '158', 	'numar' => 'B-133-CLT', 	'fuel_id' => '5', 	'type_id' => '28', 	'brand_id' => '1', 
              ],
              [
                     'id' => '159', 	'numar' => 'B-54-CLT', 	'fuel_id' => '5', 	'type_id' => '29', 	'brand_id' => '1', 
              ],
              [
                     'id' => '160', 	'numar' => 'B-57-CLT', 	'fuel_id' => '5', 	'type_id' => '29', 	'brand_id' => '1', 
              ],
              [
                     'id' => '161', 	'numar' => 'B-48-CLT', 	'fuel_id' => '5', 	'type_id' => '29', 	'brand_id' => '1', 
              ],
              [
                     'id' => '162', 	'numar' => 'B-176-CLT', 	'fuel_id' => '5', 	'type_id' => '14', 	'brand_id' => '1', 
              ],
              [
                     'id' => '163', 	'numar' => 'B-123-CLT', 	'fuel_id' => '5', 	'type_id' => '19', 	'brand_id' => '1', 
              ],
              [
                     'id' => '164', 	'numar' => 'B-124-CLT', 	'fuel_id' => '5', 	'type_id' => '4', 	'brand_id' => '1', 
              ],
              [
                     'id' => '165', 	'numar' => 'B-220-CLT', 	'fuel_id' => '5', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '166', 	'numar' => 'B-555-CLT', 	'fuel_id' => '5', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '167', 	'numar' => 'B-550-CLT', 	'fuel_id' => '5', 	'type_id' => '5', 	'brand_id' => '1', 
              ],
              [
                     'id' => '168', 	'numar' => 'B-18-CLT', 	'fuel_id' => '5', 	'type_id' => '21', 	'brand_id' => '10', 
              ],
              [
                     'id' => '169', 	'numar' => 'B-61-HNS', 	'fuel_id' => '5', 	'type_id' => '22', 	'brand_id' => '9', 
              ],
              [
                     'id' => '170', 	'numar' => 'B-61-HNT', 	'fuel_id' => '5', 	'type_id' => '22', 	'brand_id' => '9', 
              ],
              [
                     'id' => '171', 	'numar' => 'B-444-CLT', 	'fuel_id' => '5', 	'type_id' => '7', 	'brand_id' => '2', 
              ],
              [
                     'id' => '172', 	'numar' => 'B-156-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '173', 	'numar' => 'B-164-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '174', 	'numar' => 'B-153-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '175', 	'numar' => 'B-154-CLT ', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '176', 	'numar' => 'B-166-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '177', 	'numar' => 'B-168-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '178', 	'numar' => 'B-161-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '179', 	'numar' => 'B-167-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '180', 	'numar' => 'B-155-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '181', 	'numar' => 'B-162-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '182', 	'numar' => 'B-165-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '183', 	'numar' => 'B-169-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '184', 	'numar' => 'B-170-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '185', 	'numar' => 'B-163-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '186', 	'numar' => 'B-157-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '187', 	'numar' => 'B-158-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '188', 	'numar' => 'B-159-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '189', 	'numar' => 'B-160-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '190', 	'numar' => 'IF-05-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '191', 	'numar' => 'B-204-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '192', 	'numar' => 'B-206-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '193', 	'numar' => 'B-182-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '194', 	'numar' => 'B-183-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '195', 	'numar' => 'B-185-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '196', 	'numar' => 'B-184-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '197', 	'numar' => 'B-181-CLT', 	'fuel_id' => '5', 	'type_id' => '6', 	'brand_id' => '3', 
              ],
              [
                     'id' => '198', 	'numar' => 'IF-19-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '199', 	'numar' => 'IF-06-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '200', 	'numar' => 'IF-18-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '201', 	'numar' => 'IF-08-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '202', 	'numar' => 'IF-15-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '203', 	'numar' => 'B-201-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '204', 	'numar' => 'B-192-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '205', 	'numar' => 'B-193-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '206', 	'numar' => 'B-194-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '207', 	'numar' => 'B-196-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '208', 	'numar' => 'B-197-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '209', 	'numar' => 'B-198-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '210', 	'numar' => 'B-199-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '211', 	'numar' => 'B-202-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '212', 	'numar' => 'B-210-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '213', 	'numar' => 'B-213-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '214', 	'numar' => 'B-211-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '215', 	'numar' => 'B-212-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '216', 	'numar' => 'B-214-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
              [
                     'id' => '217', 	'numar' => 'B-215-CLT', 	'fuel_id' => '5', 	'type_id' => '2', 	'brand_id' => '2', 
              ],
                                            
            )            
        )->count(217)->create();
        
                

    }

}
