<?php

namespace Database\Seeders;


use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DepartmentsTableSeeder extends Seeder
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
     * Inserts in DB Departments that are harcoded.
     * 
     * @return void     
     */
    private function generate()
    {
        $department = Department::factory()->state(
            new Sequence(
                [
                    'name' => 'Bucuresti Vanzari',
                    'email' => 'flavius.oltean@consolight.ro',
                    'responsabil' => 'Flavius Oltean',
                ],
                [
                    'name' => 'Bucuresti Achizitii',
                    'email' => 'adriana.florea@consolight.ro',
                    'responsabil' => 'Adriana Florea',
                ],
                [
                    'name' => 'Bucuresti Marfa',
                    'email' => 'transporturi@consolight.ro',
                    'responsabil' => 'Ciurar Marian',
                ],
                [
                    'name' => 'Bucuresti TESA',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ],
                [
                    'name' => 'Brasov',
                    'email' => 'csaba.budai@consolight.ro',
                    'responsabil' => 'Csaba Budai',
                ],
                [
                    'name' => 'HUB - Bucuresti',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ],
                [
                    'name' => 'Cluj',
                    'email' => 'cristian.muntean@consolight.ro',
                    'responsabil' => 'Muntean Cristian',
                ],
                [
                    'name' => 'Oradea',
                    'email' => 'robert.gall@consolight.ro',
                    'responsabil' => 'Robert Gall',
                ],
                [
                    'name' => 'Constanta',
                    'email' => 'bogdan.mavrodin@consolight.ro',
                    'responsabil' => 'Bogdan Mavrodin',
                ],
                [
                    'name' => 'Craiova',
                    'email' => 'stefan.dumitriu@consolight.ro',
                    'responsabil' => 'Dumitriu Stefan',
                ],
                [
                    'name' => 'Galati',
                    'email' => 'catalin.barbu@consolight.ro',
                    'responsabil' => 'Barbu Catalin',
                ],
                [
                    'name' => 'Iasi',
                    'email' => 'florin.bejan@consolight.ro; iasi@consolight.ro',
                    'responsabil' => 'Bejan Florin',
                ],
                [
                    'name' => 'Militari',
                    'email' => 'adrian.neacsu@consolight.ro',
                    'responsabil' => 'Neacsu Adrian-Marian',
                ],
                [
                    'name' => 'Otopeni',
                    'email' => 'razvan.cristea@consolight.ro',
                    'responsabil' => 'Cristea Razvan',
                ],
                [
                    'name' => 'Sibiu',
                    'email' => 'lia.bobes@consolight.ro',
                    'responsabil' => 'Bobes Lia',
                ],
                [
                    'name' => 'Timisoara',
                    'email' => 'adriana.trusca@consolight.ro',
                    'responsabil' => 'Adriana Trusca',
                ],
                [
                    'name' => 'Card limitat',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ],
                [
                    'name' => 'Nicaieri',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ]
            )
        )->count(16)->create();
    }
}
