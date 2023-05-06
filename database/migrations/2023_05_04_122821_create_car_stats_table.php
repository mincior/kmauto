<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateCarStatsTable extends Migration
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
		Schema::create('car_stats', function (Blueprint $table) {
			$table->id();
			$table->string('observatii');
			$table->bigInteger('interval_id')->unsigned()->index()->nullable();
			$table->foreign('interval_id')->references('id')->on('intervals');
			$table->bigInteger('car_id')->unsigned()->index()->nullable();
			$table->foreign('car_id')->references('id')->on('cars');		
			$table->bigInteger('car_stat_value_id')->unsigned()->index()->nullable();
			$table->foreign('car_stat_value_id')->references('id')->on('car_stat_values');		
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
	Schema::dropIfExists('car_stats');
	//End craft placeholder #3
    }
}

// EOF