<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class SettingsTableSeeder extends Seeder
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
     * Inserts in DB users that are harcoded.
     * 
     * @return void     
     */
    private function generate()
    {
        $users = Setting::factory()->state(
            new Sequence(
                [
                    'nume' => 'numarZileLunaAnterioara',
                    'valoare' => '10',
                    'interval_id' => 1,
                ],
                [
                    'nume' => 'butonSelectat',
                    'valoare' => 'users',
                    'interval_id' => 1,
                ],
                [
                    'nume' => 'monthId',
                    'valoare' => '1',
                    'interval_id' => 1,
                ],
                
            )            
        )->count(3)->create();
        
                

    }

}
