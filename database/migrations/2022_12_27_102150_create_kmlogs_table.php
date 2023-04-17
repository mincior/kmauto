<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Begin craft placeholder #1
class CreateKmlogsTable extends Migration
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
		Schema::create('kmlogs', function (Blueprint $table) {
			$table->id();
			$table->integer('km')->nullable();
			$table->string('picture')->nullable();
            $table->string('observatii')->nullable();
			$table->integer('ordine')->nullable();
			$table->bigInteger('interval_id')->unsigned()->index()->nullable();
			$table->foreign('interval_id')->references('id')->on('intervals');
			$table->bigInteger('user_id')->unsigned()->index()->nullable();
			$table->foreign('user_id')->references('id')->on('users');
			$table->bigInteger('car_id')->unsigned()->index()->nullable();
			$table->foreign('car_id')->references('id')->on('cars');		
			$table->bigInteger('stat_id')->unsigned()->index()->nullable();
			$table->foreign('stat_id')->references('id')->on('stats');		
            $table->timestamps();
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
	Schema::dropIfExists('kmlogs');
	//End craft placeholder #3
    }
}

// EOF