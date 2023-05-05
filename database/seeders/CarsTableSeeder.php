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
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-138-CLT',
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-201-CLT',
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-209-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-211-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-213-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-224-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-225-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-226-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-218-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-803-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-122-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-141-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-145-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-171-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-165-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-186-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-260-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-888-CSN', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-905-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-988-CNS', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-230-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-214-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-144-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-155-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-156-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-157-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-159-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-16-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-160-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-24-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-601-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-777-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-882-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-884-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-990-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-158-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-146-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-147-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-148-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-143-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-163-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-925-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-904-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-913-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-907-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-227-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-83-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-202-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-192-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-196-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-262-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-185-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-216-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '1', 'brand_id' =>'1', 'numar' => 'B-162-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-129-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B038679', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B038680', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B038678', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-187-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-199-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-444-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-553-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-250-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-303-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-223-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-27-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-924-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-28-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-505-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'IF-18-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B038684', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B038687', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-161-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '2', 'brand_id' =>'1', 'numar' => 'B-181-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-802-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-806-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-188-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-116-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-118-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-134-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-198-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-801-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-880-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-440-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-770-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-228-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-125-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-920-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-911-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-912-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-207-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B038676', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-908-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-902-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-923-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B038682', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B038685', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-127-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-552-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-221-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-44-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'IF-08-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'IF-15-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-210-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-193-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-194-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-800-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-809-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-151-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-208-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B038686', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-901-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-914-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-172-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-126-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-554-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'IF-06-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-240-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-229-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-807-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '3', 'brand_id' =>'1', 'numar' => 'B-805-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-217-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-921-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-205-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-903-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-915-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-917-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-918-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-175-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-215-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-139-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-804-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-197-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-333-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-906-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-29-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-916-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-551-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-184-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-166-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-121-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-212-CLT', 
                ],
                [
                       'type_id' => '1',  'fuel_id' => '4', 'brand_id' =>'1', 'numar' => 'B-117-CLT', 
                ],
                
            )            
        )->count(143)->create();
        
                

    }

}
