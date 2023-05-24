<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CarsTableSeeder;
use Database\Seeders\CustomersSeeder;
use Database\Seeders\FuelsTableSeeder;
use Database\Seeders\TypesTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\BrandsTableSeeder;
use Database\Seeders\MonthsTableSeeder;
use Database\Seeders\IntervalsTableSeeder;
use Database\Seeders\RevisionsTableSeeder;
use Database\Seeders\DepartmentsTableSeeder;
use Database\Seeders\CarAsigValuesTableSeeder;
use Database\Seeders\CarStatValuesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MonthsTableSeeder::class);
        $this->call(IntervalsTableSeeder::class);
        $this->call(CustomersSeeder::class);
        $this->call(StatsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(FuelsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(RevisionsTableSeeder::class);
        $this->call(CarAsigValuesTableSeeder::class);
        $this->call(CarStatValuesTableSeeder::class);
        $this->call(CarDepsTableSeeder::class);
        $this->call(FramesTableSeeder::class);
        $this->call(CarsecondsTableSeeder::class);
        $this->call(UserDepsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(UserCarsTableSeeder::class);
        $this->call(CarConsumptionsTableSeeder::class);
        $this->call(AvailablecarsTableSeeder::class);
        $this->call(ExpiresTableSeeder::class);
        $this->call(CarPropValuesTableSeeder::class);
        $this->call(AvailableusersTableSeeder::class);
        $this->call(UserKmlimitsTableSeeder::class);
        $this->call(UserPhonesTableSeeder::class);
        $this->call(FuelPricesTableSeeder::class);
        /* database table seeder placeholder */
		$this->call(CarPropsTableSeeder::class);
        $this->call(CarAsigsTableSeeder::class);
        $this->call(CarStatsTableSeeder::class);
    }
}
