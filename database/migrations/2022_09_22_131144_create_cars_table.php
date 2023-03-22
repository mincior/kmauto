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
			$table->decimal('consum_mediu', 5, 2);
			$table->string('carburant')->default('benzina')->commnet('motorina/benzina');
			$table->boolean('activ', 1)->default('1');
			$table->string('observatii')->nullable();
			$table->bigInteger('type_id')->unsigned()->index()->nullable();
			$table->foreign('type_id')->references('id')->on('types');
			$table->bigInteger('user_id')->unsigned()->index()->nullable();
			$table->foreign('user_id')->references('id')->on('users');
			$table->bigInteger('brand_id')->unsigned()->index()->nullable();
			$table->foreign('brand_id')->references('id')->on('brands');		
		//End craft placeholder #2
            $table->timestamps();
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