<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateFuelPricesTable extends Migration
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
		Schema::create('fuel_prices', function (Blueprint $table) {
			$table->id();
			$table->string('observatii')->nullable();
			$table->double('valoare', 5, 1);
			$table->bigInteger('interval_id')->unsigned()->index()->nullable();
			$table->foreign('interval_id')->references('id')->on('intervals');
			$table->bigInteger('fuel_id')->unsigned()->index()->nullable();
			$table->foreign('fuel_id')->references('id')->on('fuels');		
		//End craft placeholder #2
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
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
	Schema::dropIfExists('fuel_prices');
	//End craft placeholder #3
    }
}

// EOF