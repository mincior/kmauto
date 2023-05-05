<?php

namespace Database\Seeders;

use App\Models\UserPhone;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserPhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->generate();
    }

        /**
     
     * 
     * @return void     
     */
    private function generate()
    {
        $users = UserPhone::factory()->state(
            new Sequence(
                [
                    'valoare' => '0756889554',
                    'user_id' => 120,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => '0756559551',
                    'user_id' => 129,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => '0756339552',
                    'user_id' => 128,
                    'interval_id' => 1,
                ],
                [
                    'valoare' => '0756449553',
                    'user_id' => 126,
                    'interval_id' => 1,
                ],
                
            )            
        )->count(4)->create();
        
                

    }

}
