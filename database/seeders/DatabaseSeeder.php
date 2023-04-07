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
        $this->call(IntervalTableSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(CarDepTableSeeder::class);
        $this->call(UserDepTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(CarUserTableSeeder::class);
        $this->call(FuelsTableSeeder::class);
       
    }
}
