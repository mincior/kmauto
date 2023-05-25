<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateLogsTable extends Migration
//End craft placeholder #1
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Begin craft placeholder #2
		Schema::create('logs', function (Blueprint $table) {
			$table->id();
			$table->string('operatie');
			$table->string('descriere');
			$table->timestamps();
			$table->bigInteger('user_id')->unsigned()->index()->nullable();
			$table->foreign('user_id')->references('id')->on('users');		
		//End craft placeholder #2
            //Atentie. Daca se doreste timestamps, se vor pune in schema Drawio de forma: timestamps()
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    //Begin craft placeholder #3
	Schema::dropIfExists('logs');
	//End craft placeholder #3
    }
}

// EOF