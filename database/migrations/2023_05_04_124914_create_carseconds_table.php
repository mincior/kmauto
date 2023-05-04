<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateCarsecondsTable extends Migration
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
		Schema::create('carseconds', function (Blueprint $table) {
			$table->id();
			$table->string('nr_identificare')->nullable();
			$table->string('caroseria')->nullable();
			$table->boolean('are_gps')->nullable();
			$table->date('recep_auto')->nullable();
			$table->integer('an_fabr')->nullable();
			$table->integer('poluare')->nullable();
			$table->string('p_kw')->nullable();
			$table->string('mtma')->nullable();
			$table->string('cap_cyl')->nullable();
			$table->string('cap_rez')->nullable();
			$table->bigInteger('car_id')->unsigned()->index()->nullable();
			$table->foreign('car_id')->references('id')->on('cars');		
		//End craft placeholder #2
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
	Schema::dropIfExists('carseconds');
	//End craft placeholder #3
    }
}

// EOF