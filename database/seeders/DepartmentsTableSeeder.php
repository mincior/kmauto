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
                    'id' => 1,
                    'name' => 'Bucuresti Vanzari',
                    'email' => 'flavius.oltean@consolight.ro',
                    'responsabil' => 'Flavius Oltean',
                ],
                [
                    'id' => 2,
                    'name' => 'Bucuresti Achizitii',
                    'email' => 'adriana.florea@consolight.ro',
                    'responsabil' => 'Adriana Florea',
                ],
                [
                    'id' => 3,
                    'name' => 'Bucuresti Marfa',
                    'email' => 'transporturi@consolight.ro',
                    'responsabil' => 'Ciurar Marian',
                ],
                [
                    'id' => 4,
                    'name' => 'Bucuresti TESA',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ],
                [
                    'id' => 5,
                    'name' => 'Brasov',
                    'email' => 'csaba.budai@consolight.ro',
                    'responsabil' => 'Csaba Budai',
                ],
                [
                    'id' => 6,
                    'name' => 'HUB - Bucuresti',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ],
                [
                    'id' => 7,
                    'name' => 'Cluj',
                    'email' => 'cristian.muntean@consolight.ro',
                    'responsabil' => 'Muntean Cristian',
                ],
                [
                    'id' => 8,
                    'name' => 'Oradea',
                    'email' => 'robert.gall@consolight.ro',
                    'responsabil' => 'Robert Gall',
                ],
                [
                    'id' => 9,
                    'name' => 'Constanta',
                    'email' => 'bogdan.mavrodin@consolight.ro',
                    'responsabil' => 'Bogdan Mavrodin',
                ],
                [
                    'id' => 10,
                    'name' => 'Craiova',
                    'email' => 'stefan.dumitriu@consolight.ro',
                    'responsabil' => 'Dumitriu Stefan',
                ],
                [
                    'id' => 11,
                    'name' => 'Galati',
                    'email' => 'catalin.barbu@consolight.ro',
                    'responsabil' => 'Barbu Catalin',
                ],
                [
                    'id' => 12,
                    'name' => 'Iasi',
                    'email' => 'florin.bejan@consolight.ro; iasi@consolight.ro',
                    'responsabil' => 'Bejan Florin',
                ],
                [
                    'id' => 13,
                    'name' => 'Militari',
                    'email' => 'adrian.neacsu@consolight.ro',
                    'responsabil' => 'Neacsu Adrian-Marian',
                ],
                [
                    'id' => 14,
                    'name' => 'Otopeni',
                    'email' => 'razvan.cristea@consolight.ro',
                    'responsabil' => 'Cristea Razvan',
                ],
                [
                    'id' => 15,
                    'name' => 'Sibiu',
                    'email' => 'lia.bobes@consolight.ro',
                    'responsabil' => 'Bobes Lia',
                ],
                [
                    'id' => 16,
                    'name' => 'Timisoara',
                    'email' => 'adriana.trusca@consolight.ro',
                    'responsabil' => 'Adriana Trusca',
                ],
                [
                    'id' => 17,
                    'name' => 'Bucuresti',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ],
                [
                    'id' => 18,
                    'name' => 'Doraly',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ],
                [
                    'id' => 19,
                    'name' => 'Card limitat',
                    'email' => 'petrica.ilie@consolight.ro',
                    'responsabil' => 'Ilie Petrica',
                ],
            )
        )->count(18)->create();
    }
}
