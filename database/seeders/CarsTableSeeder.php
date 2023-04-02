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
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-138-CLT',
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-201-CLT',
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-209-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-211-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-213-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-224-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-225-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-226-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-218-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-803-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-122-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-141-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-145-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-171-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-165-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-186-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-260-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-888-CSN', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-905-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-988-CNS', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-230-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-214-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-144-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-155-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-156-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-157-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-159-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-16-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-160-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-24-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-601-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-777-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-882-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-884-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-990-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-158-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-146-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-147-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-148-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-143-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-163-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-925-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-904-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-913-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-907-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-227-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-83-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-202-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-192-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-196-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-262-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-185-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-216-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-162-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-129-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038679', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038680', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038678', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-187-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-199-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-444-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-553-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-250-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-303-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-223-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-27-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-924-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-28-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-505-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-18-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038684', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038687', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-161-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-181-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-802-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-806-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-188-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-116-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-118-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-134-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-198-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-801-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-880-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-440-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-770-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-228-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-125-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-920-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-911-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-912-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-207-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038676', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-908-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-902-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-923-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038682', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038685', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-127-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-552-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-221-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-44-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-08-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-15-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-210-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-193-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-194-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-800-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-809-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-151-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-208-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038686', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-901-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-914-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-172-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-126-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-554-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-06-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-240-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-229-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-807-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-805-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-217-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-921-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-205-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-903-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-915-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-917-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-918-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-175-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-215-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-139-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-804-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-197-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-333-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-906-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-29-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-916-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-551-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-184-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-166-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-121-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-212-CLT', 
                ],
                [
                     'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-117-CLT', 
                ],
                
            )            
        )->count(143)->create();
        
                

    }

}
