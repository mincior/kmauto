<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateCarAsigsTable extends Migration
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
		Schema::create('car_asigs', function (Blueprint $table) {
			$table->id();
			$table->string('valoare');
			$table->bigInteger('interval_id')->unsigned()->index()->nullable();
			$table->foreign('interval_id')->references('id')->on('intervals');
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
	Schema::dropIfExists('car_asigs');
	//End craft placeholder #3
    }
}

// EOF