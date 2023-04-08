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
     * Inserts in DB users that are harcoded.
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
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-138-CLT',
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-201-CLT',
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-209-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-211-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-213-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-224-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-225-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-226-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-218-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-803-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-122-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-141-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-145-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-171-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-165-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-186-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-260-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-888-CSN', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-905-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-988-CNS', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-230-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-214-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-144-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-155-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-156-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-157-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-159-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-16-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-160-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-24-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-601-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-777-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-882-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-884-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-990-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-158-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-146-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-147-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-148-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-143-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-163-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-925-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-904-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-913-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-907-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-227-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-83-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-202-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-192-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-196-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-262-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-185-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-216-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-162-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-129-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038679', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038680', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038678', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-187-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-199-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-444-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-553-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-250-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-303-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-223-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-27-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-924-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-28-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-505-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-18-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038684', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038687', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-161-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-181-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-802-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-806-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-188-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-116-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-118-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-134-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-198-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-801-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-880-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-440-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-770-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-228-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-125-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-920-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-911-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-912-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-207-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038676', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-908-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-902-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-923-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038682', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038685', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-127-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-552-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-221-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-44-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-08-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-15-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-210-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-193-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-194-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-800-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-809-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-151-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-208-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038686', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-901-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-914-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-172-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-126-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-554-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-06-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-240-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-229-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-807-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-805-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-217-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-921-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-205-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-903-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-915-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-917-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-918-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-175-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-215-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-139-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-804-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-197-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-333-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-906-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-29-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-916-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-551-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-184-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-166-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-121-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-212-CLT', 
                ],
                [
                      'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-117-CLT', 
                ],
                
            )            
        )->count(143)->create();
        
                

    }

}
