<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateExpiresTable extends Migration
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
		Schema::create('expires', function (Blueprint $table) {
			$table->id();
			$table->date('casco')->nullable();
			$table->date('rca')->nullable();
			$table->date('rovinieta')->nullable();
			$table->date('itp')->nullable();
			$table->date('final_leasing')->nullable();
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
	Schema::dropIfExists('expires');
	//End craft placeholder #3
    }
}

// EOF