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
        $this->call(UsersSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(CarDepartmentTableSeeder::class);
        $this->call(DepartmentUserTableSeeder::class);
       
    }
}
