<?php
namespace App\Console\Commands;
use \App\User;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class SeedAllCommand extends Command
{
	/**
 	* The name and signature of the console command.
 	*
 	* @var string
 	*/
	protected $signature = 'seed:all';//scrie aici numele comenzii pe care o vei tasta in terminal ex: php artisan seedall
  
	/**
 	* The console command description.
 	*
 	* @var string
 	*/
	protected $description = 'Creaza fisierele seed pentru toate tabelele din baza de date';//pune aici descrierea comenzii asa cum vrei sa apara cand se da comanda php artisan list

	/**
 	* Create a new command instance.
 	*
 	* @return void
 	*/
	public function __construct()
	{
    	parent::__construct();
	}

	/**
 	* Execute the console command.
 	*
 	* @return mixed
 	*/
	public function handle()
	{
   	
    	$tables = DB::select('SHOW TABLES');//un obiect ce contine toate tabelele

    	foreach($tables as $table)//din fiecare tabel se extrage numele cu $table->Tables_in_numebazadate
    	{ 	
        	$art=\Artisan::call('iseed' , ['tables' => $table->Tables_in_hedkytms_db]);//pune aici in loc de imob, numele bazei de date
    	} echo "Ok  -  all tables seeded.".PHP_EOL;

	}
}