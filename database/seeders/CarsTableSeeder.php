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
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-138-CLT',
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-201-CLT',
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-209-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-211-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-213-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-224-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-225-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-226-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-218-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-803-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-122-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-141-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-145-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-171-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-165-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-186-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-260-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-888-CSN', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-905-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-988-CNS', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-230-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-214-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-144-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-155-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-156-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-157-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-159-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-16-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-160-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-24-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-601-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-777-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-882-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-884-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-990-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-158-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-146-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-147-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-148-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-143-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-163-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-925-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-904-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-913-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-907-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-227-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-83-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-202-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-192-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-196-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-262-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-185-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-216-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-162-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-129-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038679', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038680', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038678', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-187-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-199-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-444-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-553-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-250-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-303-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-223-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-27-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-924-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-28-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-505-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-18-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038684', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038687', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-161-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-181-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-802-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-806-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-188-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-116-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-118-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-134-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-198-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-801-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-880-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-440-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-770-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-228-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-125-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-920-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-911-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-912-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-207-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038676', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-908-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-902-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-923-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038682', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038685', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-127-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-552-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-221-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-44-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-08-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-15-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-210-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-193-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-194-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-800-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-809-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-151-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-208-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B038686', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-901-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-914-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-172-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-126-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-554-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'IF-06-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-240-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-229-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-807-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-805-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-217-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-921-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-205-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-903-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-915-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-917-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-918-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-175-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-215-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-139-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-804-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-197-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-333-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-906-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-29-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-916-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-551-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-184-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-166-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-121-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-212-CLT', 
                ],
                [
                    'user_id' => rand(1,130), 'consum_mediu' => 6.5,   'activ' => 1, 'type_id' => '1', 'brand_id' =>'1', 'numar' => 'B-117-CLT', 
                ],
                
            )            
        )->count(150)->create();
        
                

    }

}
