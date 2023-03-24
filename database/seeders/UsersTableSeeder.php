<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UsersTableSeeder extends Seeder
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
        $users = User::factory()->state(
            new Sequence(
            [
                'id' => 1, 'name' => 'Vicentiu Mincior', 'email' => 'vicentiu.mincior@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 1, 'observatii' => '', 'telefon' => '755685364'
            ],
            [
                'id' => 131, 'name' => 'Abeaboeru Sorin Adrian', 'email' => 'Sorin_adrian2020@yahoo.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '755685364'
            ],
            [
                'id' => 2, 'name' => 'Abrudan Liviu', 'email' => 'liviuabrudan70@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130171'
            ],
            [
                'id' => 3, 'name' => 'Caba Adrian Ioan', 'email' => 'adrian.caba@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Este plecat din firma cu data de 14 feb', 'telefon' => '742130812'
            ],
            [
                'id' => 4, 'name' => 'Trusca Adriana-Nicoleta', 'email' => 'adriana.trusca@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130365'
            ],
            [
                'id' => 5, 'name' => 'Andrei Marian', 'email' => 'andreimarian1972@yahoo.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130165'
            ],
            [
                'id' => 6, 'name' => 'Anicai Adrian', 'email' => 'anicaiadrian65@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '741193008'
            ],
            [
                'id' => 7, 'name' => 'Apostol Paul Cristian', 'email' => 'cristian.apostol@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131331'
            ],
            [
                'id' => 8, 'name' => 'Asavoaei Eugen', 'email' => 'eugenasavoai@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130278'
            ],
            [
                'id' => 9, 'name' => 'Barbu Ninel-Catalin', 'email' => 'catalin.barbu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130378'
            ],
            [
                'id' => 10, 'name' => 'Bejan Florin', 'email' => 'florin.bejan@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Pleaca cu 1 martie', 'telefon' => '742130892'
            ],
            [
                'id' => 11, 'name' => 'Berchiu Marian - Liviu', 'email' => 'liviu.berchiu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130393'
            ],
            [
                'id' => 12, 'name' => 'Bobes Lia-Maria', 'email' => 'lia.bobes@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 40, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742132022'
            ],
            [
                'id' => 13, 'name' => 'Butufei Bogdan', 'email' => 'bogdan.butufei@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130458'
            ],
            [
                'id' => 14, 'name' => 'Gheorghe Vasile-Bogdan', 'email' => 'bogdan.gheorghe@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130671'
            ],
            [
                'id' => 15, 'name' => 'Buciumeanu Daniel - Valentin', 'email' => 'daniel.buciumeanu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130146'
            ],
            [
                'id' => 16, 'name' => 'Bursuc George-Bogdan', 'email' => 'bogdan.bursuc@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130499'
            ],
            [
                'id' => 17, 'name' => 'Butoi Marian', 'email' => 'nu@areemail6.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131563'
            ],
            [
                'id' => 18, 'name' => 'Calin Mihai', 'email' => 'mihai.calin@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Pricepe g', 'telefon' => '742131946'
            ],
            [
                'id' => 19, 'name' => 'Bursuc Catalin', 'email' => 'catalin.bursuc@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130340'
            ],
            [
                'id' => 20, 'name' => 'Velcescu Catalin', 'email' => 'catalin.velcescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130449'
            ],
            [
                'id' => 21, 'name' => 'Chiriac Cristian-Mihai', 'email' => 'cristian.chiriac@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131291'
            ],
            [
                'id' => 22, 'name' => 'Ilies Ciprian Nicusor', 'email' => 'ciprian.ilies@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 30, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130167'
            ],
            [
                'id' => 23, 'name' => 'Nedelcu Ciprian', 'email' => 'ciprian.nedelcu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130161'
            ],
            [
                'id' => 24, 'name' => 'Ciurar Ticu-Marian', 'email' => 'pyf_marian@yahoo.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130162'
            ],
            [
                'id' => 25, 'name' => 'Comarniceanu Stelian-Marius', 'email' => 'marius.comarniceanu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742132138'
            ],
            [
                'id' => 26, 'name' => 'Costache Marian', 'email' => 'marian.costache@tablomet.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 27, 'name' => 'Cristea Constantin-Razvan', 'email' => 'razvan.cristea@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 50, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Sef filiala Otopeni', 'telefon' => '742130116'
            ],
            [
                'id' => 28, 'name' => 'Gica Gabriel - Cristian', 'email' => 'gica.cristian70@yahoo.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '0744371642, 0742132987'
            ],
            [
                'id' => 29, 'name' => 'Budai Csaba', 'email' => 'csaba.budai@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131150'
            ],
            [
                'id' => 30, 'name' => 'Cucu Octavian', 'email' => 'octavian.cucu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Nu mai lucreaza cu 1 martie', 'telefon' => '742133041'
            ],
            [
                'id' => 31, 'name' => 'Curca Gavrila', 'email' => 'gabicurca65@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130076'
            ],
            [
                'id' => 32, 'name' => 'Danete Cristian', 'email' => 'danetcristian@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 33, 'name' => 'Petrescu Daniel - Dumitru', 'email' => 'daniel.petrescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130286'
            ],
            [
                'id' => 34, 'name' => 'Darjan Alexandru', 'email' => 'alexandrudarjan67@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 35, 'name' => 'Dinita Marius Cristian', 'email' => 'dinita.marius76@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130185'
            ],
            [
                'id' => 36, 'name' => 'Dinu Cosmin', 'email' => 'cosmin.dinu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131164'
            ],
            [
                'id' => 37, 'name' => 'Dragan Ilie', 'email' => 'florin.bejan@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131563'
            ],
            [
                'id' => 38, 'name' => 'Duinea Ionut-Razvan', 'email' => 'razvan.duinea@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 50, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Solicitare marire limita km in curs', 'telefon' => '742130476'
            ],
            [
                'id' => 39, 'name' => 'Dumitriu Stefan', 'email' => 'stefan.dumitriu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131216'
            ],
            [
                'id' => 40, 'name' => 'Filip Andrei', 'email' => 'andrei.filip@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742133935'
            ],
            [
                'id' => 41, 'name' => 'Oltean Flavius Petru', 'email' => 'flavius.oltean@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742134761'
            ],
            [
                'id' => 42, 'name' => 'Costescu Florin', 'email' => 'florin.costescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 50, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Se va sterge. Nu mai lucreaza la Consolight', 'telefon' => '742138920'
            ],
            [
                'id' => 43, 'name' => 'Gheorghe Gabriel', 'email' => 'gabriel.gheorghe@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130466'
            ],
            [
                'id' => 44, 'name' => 'Sasu Nicolae Gabriel', 'email' => 'gabriel.sasu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742132858'
            ],
            [
                'id' => 45, 'name' => 'Gania Marius-Lucian', 'email' => 'razvan.cristea@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130125'
            ],
            [
                'id' => 46, 'name' => 'Gania Razvan - Alexandru', 'email' => 'razvan.gania@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 50, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130272'
            ],
            [
                'id' => 47, 'name' => 'Apostol George', 'email' => 'george.apostol@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 48, 'name' => 'Ghimis Marian', 'email' => 'nu@areemail7.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => 'ghimismarian87@gmail.com', 'telefon' => '742132200'
            ],
            [
                'id' => 49, 'name' => 'Ghiran Sorin-Florin', 'email' => 'sorin.ghiran@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 30, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131345'
            ],
            [
                'id' => 50, 'name' => 'Gradinaru Eugen', 'email' => 'razvan.cristea@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130577'
            ],
            [
                'id' => 51, 'name' => 'Graur Vasile Simion', 'email' => 'vasile.graur@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742134765'
            ],
            [
                'id' => 52, 'name' => 'Hanu Mircea', 'email' => 'tomysonline@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742134763'
            ],
            [
                'id' => 53, 'name' => 'Ilie Petrica', 'email' => 'petrica.ilie@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 700, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130761'
            ],
            [
                'id' => 54, 'name' => 'Iliescu Valentin', 'email' => 'valentin.iliescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742132677'
            ],
            [
                'id' => 55, 'name' => 'Ionescu Florin', 'email' => 'florinionescu6730@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131945'
            ],
            [
                'id' => 56, 'name' => 'Iordache Nicolae Marius', 'email' => 'marius.iordache@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130533'
            ],
            [
                'id' => 57, 'name' => 'Stefanescu Iulia', 'email' => 'iulia.stefanescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742134622'
            ],
            [
                'id' => 58, 'name' => 'Padurariu Iulian', 'email' => 'iulian.padurariu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131289'
            ],
            [
                'id' => 59, 'name' => 'Vlad Iulian Florian', 'email' => 'razvan.cristea@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 50, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131257'
            ],
            [
                'id' => 60, 'name' => 'Dobre Alexandru', 'email' => 'alex.dobre@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'dobre_alex2003@yahoo.com', 'telefon' => '742130558'
            ],
            [
                'id' => 61, 'name' => 'Leonte Florin', 'email' => 'florin.leonte@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Se va scoate. A fost scos din Google. A plecat din firma incepand cu 13 feb 2023', 'telefon' => '742130333'
            ],
            [
                'id' => 62, 'name' => 'Mangheru Liviu', 'email' => 'liviu.mangheru@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130468'
            ],
            [
                'id' => 63, 'name' => 'Furtuna Lucian', 'email' => 'lucian.furtuna@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 64, 'name' => 'Marghidan-Albu Mihai-Relu', 'email' => 'mihai.marghidan@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => 'Se va sterge, e plecat din firma', 'telefon' => '742130880'
            ],
            [
                'id' => 65, 'name' => 'Marchidon Marian', 'email' => 'nu@areemail8.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 66, 'name' => 'Marinescu Ion', 'email' => 'ionut.marinescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 50, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130775'
            ],
            [
                'id' => 67, 'name' => 'Neaga Marius-Gheorghe', 'email' => 'marius.neaga@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 35, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130591'
            ],
            [
                'id' => 68, 'name' => 'Mavrodin Bogdan', 'email' => 'bogdan.mavrodin@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130077'
            ],
            [
                'id' => 69, 'name' => 'Mazilescu Florina - Nadia', 'email' => 'nadia.mazilescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742132752'
            ],
            [
                'id' => 70, 'name' => 'Mihui Constantin-Dan', 'email' => 'gabormolnar246@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Nu mai lucreaza din 20 ian', 'telefon' => ''
            ],
            [
                'id' => 71, 'name' => 'Dragos Mihai Remus', 'email' => 'nu@areemail9.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 72, 'name' => 'Miron Silviu', 'email' => 'catalin.barbu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 73, 'name' => 'Mocanu Sebastian', 'email' => 'sebastian.mocanu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131130'
            ],
            [
                'id' => 74, 'name' => 'Moraru Sebastian-Florin', 'email' => 'sebastian.moraru@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 75, 'name' => 'Muntean Cristian-Nicolae', 'email' => 'cristian.muntean@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 30, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130560'
            ],
            [
                'id' => 76, 'name' => 'Nae Marian Tablomet', 'email' => 'marian.nae@tablomet.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131885'
            ],
            [
                'id' => 77, 'name' => 'Neacsu Adrian-Marian', 'email' => 'adrian.neacsu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130293'
            ],
            [
                'id' => 78, 'name' => 'Nedelcu Alexandru Catalin', 'email' => 'razvan.cristea@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 70, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130356'
            ],
            [
                'id' => 79, 'name' => 'Craciun Nicu', 'email' => 'nicu.craciun@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '!', 'telefon' => '742130521'
            ],
            [
                'id' => 80, 'name' => 'Nistoran Silviu', 'email' => 'silviu.nistoran@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742133877'
            ],
            [
                'id' => 81, 'name' => 'Nitu Iulian-Alexandru', 'email' => 'n.iulian@ymail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130172'
            ],
            [
                'id' => 82, 'name' => 'Olaeru Laurentiu Daniel', 'email' => 'daniel.olaeru@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742134772'
            ],
            [
                'id' => 83, 'name' => 'Olteanu Florin', 'email' => 'florin.olteanu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742132146'
            ],
            [
                'id' => 84, 'name' => 'Oroseanu Stefan', 'email' => 'stefan.oroseanu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130349'
            ],
            [
                'id' => 85, 'name' => 'Pana Ion', 'email' => 'ionut.pana@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742132338'
            ],
            [
                'id' => 86, 'name' => 'Panait Valeriu', 'email' => 'valeriu.panait@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130377'
            ],
            [
                'id' => 87, 'name' => 'Paun Alexandru Cristian', 'email' => 'mihaisandu407@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130507'
            ],
            [
                'id' => 88, 'name' => 'Pirnacu Razvan Florin', 'email' => 'razvan.pirnacu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Eoliene', 'telefon' => '742130479'
            ],
            [
                'id' => 89, 'name' => 'Popa Dumitru', 'email' => 'popadumitru1962@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130268'
            ],
            [
                'id' => 90, 'name' => 'Popeiu Andrei', 'email' => 'andrei.popeiu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130613'
            ],
            [
                'id' => 91, 'name' => 'Postolache Razvan', 'email' => 'catalin.barbu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 92, 'name' => 'Protopopescu Cristian', 'email' => 'nu@areemail10.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 93, 'name' => 'Radu Constantin', 'email' => 'stefan.dumitriu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '748215864'
            ],
            [
                'id' => 94, 'name' => 'Radu Gheorghe', 'email' => 'radugh69@yahoo.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130593'
            ],
            [
                'id' => 95, 'name' => 'Radu Paul', 'email' => 'radupaul800@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130193'
            ],
            [
                'id' => 96, 'name' => 'Gall Robert', 'email' => 'robert.gall@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Pleaca cu 1 martie', 'telefon' => '742130984'
            ],
            [
                'id' => 97, 'name' => 'Rusu Cornelia', 'email' => 'cornelia.rusu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130085'
            ],
            [
                'id' => 98, 'name' => 'Salajan Cristian', 'email' => 'cristi.salajan@tablomet.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130201'
            ],
            [
                'id' => 99, 'name' => 'Drumea Traian - Sorin', 'email' => 'sdrumea67@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742134421'
            ],
            [
                'id' => 100, 'name' => 'Mija Sorin', 'email' => 'nu@areemail11.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 101, 'name' => 'Ungureanu Alexandru Sorin', 'email' => 'sorin.ungureanu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130522'
            ],
            [
                'id' => 102, 'name' => 'Sotir Vasile', 'email' => 'vasile.sotir@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131933'
            ],
            [
                'id' => 103, 'name' => 'Stefan Silviu', 'email' => 'silviu.stefan80@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130085'
            ],
            [
                'id' => 104, 'name' => 'Stefanescu Catalin', 'email' => 'catalin.stefanescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131166'
            ],
            [
                'id' => 105, 'name' => 'Fratila Stefanut', 'email' => 'stefanut.fratila@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130141'
            ],
            [
                'id' => 106, 'name' => 'Culea Stelian', 'email' => 'stelian.culea@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 107, 'name' => 'Stoica Ionut', 'email' => '80stoicastefan@gmail.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130339'
            ],
            [
                'id' => 108, 'name' => 'Szabo Francisc Zsolt', 'email' => 'francisc.szabo@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131574'
            ],
            [
                'id' => 109, 'name' => 'TABLOMET', 'email' => 'nu@areemail1.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 110, 'name' => 'Tanase Nicolae', 'email' => 'nicolaetanase242@yahoo.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130299'
            ],
            [
                'id' => 111, 'name' => 'Tica Gabriel-Angel', 'email' => 'stefan.dumitriu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Primeste seful d-lui, Dumitriu Stefan', 'telefon' => '742130673'
            ],
            [
                'id' => 112, 'name' => 'Tica Vicentiu', 'email' => 'vicentiu.tica@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130830'
            ],
            [
                'id' => 113, 'name' => 'Tismanaru Florin - Alexandru', 'email' => 'florin.tismanaru@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => 'Se va sterge - a incheiat activitatea la 1 feb 2023', 'telefon' => '742130084'
            ],
            [
                'id' => 114, 'name' => 'Baja Valentin - Nicusor', 'email' => 'valentin.baja@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742134094'
            ],
            [
                'id' => 115, 'name' => 'Velescu Marian Ilie', 'email' => 'marian.velescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742134609'
            ],
            [
                'id' => 116, 'name' => 'Vodescu Dan', 'email' => 'dan.vodescu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => ''
            ],
            [
                'id' => 117, 'name' => 'Cosarca Cornel', 'email' => 'cornel.cosarca@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742133921'
            ],
            [
                'id' => 118, 'name' => 'Vasiloni Alexandru-Cristian', 'email' => 'adriana.trusca@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => 'd-na Trusca 0742130365'
            ],
            [
                'id' => 119, 'name' => 'Harhata Ionut-Ciprian', 'email' => 'nu@areemail2.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '749056991'
            ],
            [
                'id' => 120, 'name' => 'Barbosu Gabriel', 'email' => 'depozit.otopeni@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => 'Sef depozit Otopeni', 'telefon' => '742131028'
            ],
            [
                'id' => 121, 'name' => 'Cazacu Cosmin', 'email' => 'nu@areemail3.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130017'
            ],
            [
                'id' => 122, 'name' => 'Stoica Nicolae', 'email' => 'nu@areemail4.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '769692006'
            ],
            [
                'id' => 123, 'name' => 'Subtirelu Razvan', 'email' => 'nu@areemail5.com', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130528'
            ],
            [
                'id' => 124, 'name' => 'Florea Adriana', 'email' => 'adriana.florea@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742133867'
            ],
            [
                'id' => 125, 'name' => 'Bitire Gornea Daniel', 'email' => 'daniel.bitire@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 7000, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131403'
            ],
            [
                'id' => 126, 'name' => 'Szabolcs Fesus', 'email' => 'szabolcs@consolight.ro; brasov@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130395'
            ],
            [
                'id' => 127, 'name' => 'Racolta Ovidiu', 'email' => 'ovidiu.racolta@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130798'
            ],
            [
                'id' => 128, 'name' => 'Pliumbuitu Andrei George', 'email' => 'george.plumbuitu@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742130114'
            ],
            [
                'id' => 129, 'name' => 'Draghici Ciprian', 'email' => 'ciprian.draghici@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 1, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742133898'
            ],
            [
                'id' => 130, 'name' => 'Petre Daniel', 'email' => 'daniel.petre@consolight.ro', 'password' => 'Home4321@', 'limita_km' => 20, 'activ' => 0, 'is_developer' => 0, 'observatii' => '', 'telefon' => '742131212'
            ],
        ))->count(131)->create();

    }
}
