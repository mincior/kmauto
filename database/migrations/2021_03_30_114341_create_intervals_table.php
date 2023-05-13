<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateIntervalsTable extends Migration
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
		Schema::create('intervals', function (Blueprint $table) {
			$table->id();
			$table->string('interval');
			$table->date('data_inceput');
			$table->date('data_sfarsit');
			$table->boolean('select')->default(0);
		    $table->bigInteger('month_id')->unsigned()->index()->nullable();
			$table->foreign('month_id')->references('id')->on('months');		
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
	Schema::dropIfExists('intervals');
	//End craft placeholder #3
    }
}

// EOF