<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateCarsTable extends Migration
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
		Schema::create('cars', function (Blueprint $table) {
			$table->id();
			$table->string('numar');
			$table->string('observatii')->nullable();
			$table->bigInteger('fuel_id')->unsigned()->index()->nullable();
			$table->foreign('fuel_id')->references('id')->on('fuels');
			$table->bigInteger('type_id')->unsigned()->index()->nullable();
			$table->foreign('type_id')->references('id')->on('types');
			$table->bigInteger('brand_id')->unsigned()->index()->nullable();
			$table->foreign('brand_id')->references('id')->on('brands');		
            $table->string('culoare', 10)->default('#000')->nullable();
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
	Schema::dropIfExists('cars');
	//End craft placeholder #3
    }
}

// EOF