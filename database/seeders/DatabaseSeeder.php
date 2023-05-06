<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MonthTableSeeder::class);
        $this->call(IntervalsTableSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(FuelsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(RevisionsTableSeeder::class);
        $this->call(CarStatValuesTableSeeder::class);
        //$this->call(CarStatsTableSeeder::class);
        //$this->call(CarDepTableSeeder::class);
        $this->call(UserDepTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(UserCarTableSeeder::class);
        $this->call(CarConsumptionsTableSeeder::class);
        $this->call(AvailablecarsTableSeeder::class);
        $this->call(AvailableusersTableSeeder::class);
        $this->call(UserKmlimitsTableSeeder::class);
        $this->call(UserPhonesTableSeeder::class);
        $this->call(FuelPricesTableSeeder::class);
        $this->call(StatsTableSeeder::class);
        $this->call(FramesTableSeeder::class);
        //$this->call(KmlogsTableSeeder::class);
       
    }
}
